<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'currentYear' => $this->currentYear(),
            'mainMenuItems' => $this->getMenuItems(100),
            'socialMediaIcons' => $this->getSocialMediaIcons(),
            'googleApiKey' => $this->getGoogleApiKey(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Returns the current year.
     *
     * @return string
     */
    public function currentYear()
    {
        return date('Y');
    }

    /**
     * Returns external wp nav menu from custom json route
     *
     * @return json
     */
    private function getNavMenuJson($id = '')
    {
        $menu_data  = [];
        return $menu_data;
        $endpoint   = 'https://uniteustailstg.wpengine.com/wp-json/wp/v2/navigation/' . $id;
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );

        $response = file_get_contents($endpoint, false, stream_context_create($arrContextOptions));

        if ($response) {
            $menu_data  = json_decode($response);
        }

        return $menu_data;
    }

    function getMenuItems($id = '') {
        //$array_menu = wp_get_nav_menu_items($current_menu);
        $array_menu = $this->menuData($id);

        $menu = array();
        if (!is_array($array_menu)) {
            return [];
        }
        foreach ($array_menu as $m) {
            if (empty($m->menu_item_parent)) {
                $menu[$m->ID] = array();
                //$anchor = get_field('anchor', $m->ID);
                $menu[$m->ID]['anchor']     = '';
                $menu[$m->ID]['ID']         = $m->ID;
                $menu[$m->ID]['title']      = $m->title;
                $menu[$m->ID]['url']        = $this->getAbsoluteUrl($m->url);
                $menu[$m->ID]['children']   = false;

                if ($anchor) {
                    $menu[$m->ID]['anchor'] = $anchor;
                    $menu[$m->ID]['url'] = $this->getAbsoluteUrl($menu[$m->ID]['url'])
                        . '#'
                        . $anchor;
                }
            }
        }
        $submenu = array();
        foreach ($array_menu as $m) {
            if ($m->menu_item_parent) {
                $submenu[$m->ID] = array();
               // $anchor = get_field('anchor', $m->ID);
                $submenu[$m->ID]['anchor']  = '';
                $submenu[$m->ID]['ID']      = $m->ID;
                $submenu[$m->ID]['title']   = $m->title;
                $submenu[$m->ID]['url']     = $this->getAbsoluteUrl($m->url);

                if (isset($menu[$m->menu_item_parent])) {
                    $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
                }

                if ($anchor) {
                    $submenu[$m->ID]['anchor'] = $anchor;
                    $submenu[$m->ID]['url']    = $this->getAbsoluteUrl($submenu[$m->ID]['url'])
                        . '#'
                        . $anchor;
                }

                $sub_submenu = array();
                foreach ($array_menu as $mm) {
                    if ($mm->menu_item_parent == $m->ID) {
                        $sub_submenu[$mm->ID] = array();
                        //$anchor = get_field('anchor', $mm->ID);
                        $sub_submenu[$mm->ID]['ID']      = $mm->ID;
                        $sub_submenu[$mm->ID]['title']   = $mm->title;
                        $sub_submenu[$mm->ID]['url']     = $this->getAbsoluteUrl($mm->url);
                        $sub_submenu[$mm->ID]['parent']     = $mm->menu_item_parent;

                        if ($anchor) {
                            $sub_submenu[$mm->ID]['anchor'] = $anchor;
                            $sub_submenu[$mm->ID]['url'] = $this->getAbsoluteUrl($sub_submenu[$mm->ID]['url'])
                                . '#'
                                . $anchor;
                        }

                        $menu[$m->menu_item_parent]['children'][$m->ID]['children'][$mm->ID] = $sub_submenu[$mm->ID];
                    }
                }
            }
        }

        return $menu;
    }

    public function menuData($id = '') {
        return $this->getNavMenuJson($id);
    }

    public function getSocialMediaIcons()
    {
        $items = [];//get_field('social_media', 'options');
        $path = get_template_directory_uri() . '/resources/icons/social/';
        $links = [];
        if (!isset($items['social_media_link'])) {
            return $links;
        }
        foreach ($items['social_media_link'] as $index => $item) {
            $label = str_replace('-', ' ', $item['icon']);
            $label = ucwords($label);

            $links[$index]['url'] = $item['url'];
            $links[$index]['label'] = $label;
            $links[$index]['icon'] = $item['icon'] = $path . $item['icon'] . '.svg?v=1';
        }
        return $links;
    }

    public function getGoogleApiKey()
    {
        $key = get_field('google_api_key', 'option');
        return $key;
    }
    private function getAbsoluteUrl($relativeUrl='', $baseUrl='https://google.com/'){

        // if already absolute URL
        if (parse_url($relativeUrl, PHP_URL_SCHEME) !== null){
            return $relativeUrl;
        }

        // queries and anchors
        if ($relativeUrl[0] === '#' || $relativeUrl[0] === '?'){
            return $baseUrl.$relativeUrl;
        }

        // parse base URL and convert to: $scheme, $host, $path, $query, $port, $user, $pass
        extract(parse_url($baseUrl));

        // if base URL contains a path remove non-directory elements from $path
        if (isset($path) === true){
            $path = preg_replace('#/[^/]*$#', '', $path);
        }
        else {
            $path = '';
        }

        // if realtive URL starts with //
        if (substr($relativeUrl, 0, 2) === '//'){
            return $scheme.':'.$relativeUrl;
        }

        // if realtive URL starts with /
        if ($relativeUrl[0] === '/'){
            $path = null;
        }

        $abs = null;

        // if realtive URL contains a user
        if (isset($user) === true){
            $abs .= $user;

            // if realtive URL contains a password
            if (isset($pass) === true){
                $abs .= ':'.$pass;
            }

            $abs .= '@';
        }

        $abs .= $host;

        // if realtive URL contains a port
        if (isset($port) === true){
            $abs .= ':'.$port;
        }

        $abs .= $path.'/'.$relativeUrl.(isset($query) === true ? '?'.$query : null);

        // replace // or /./ or /foo/../ with /
        $re = ['#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#'];
        for ($n = 1; $n > 0; $abs = preg_replace($re, '/', $abs, -1, $n)) {
        }

        // return absolute URL
        return $scheme.'://'.$abs;

    }

}
