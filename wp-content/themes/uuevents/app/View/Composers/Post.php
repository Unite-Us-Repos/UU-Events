<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'posts' => $this->getPosts(),
            'event' => $this->getMecEvent(),
            'mecSingle' => $this->getMecSingle(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public static function getPosts($ppp = -1, $taxonomy = '', $post_ids = '', $exclude_ids = '')
    {
        $args = [
            'post_type'         => 'post',
            'posts_per_page'    => $ppp,
            'post_status'       => 'publish',
        ];

        if ($post_ids) {
            $args['post__in']  = $post_ids;
            $args['orderby']   = 'post__in';
        }

        if ($exclude_ids) {
            $args['post__not_in']  = $exclude_ids;
        }

        if ($taxonomy) {
            $args['tax_query'] = array(
                array(
                    'taxonomy'  => $taxonomy['slug'],
                    'field'     => 'term_id',
                    'terms'     => $taxonomy['ids'],
                ),
            );
        }

        $postItems = [];
        $index = 0;

        $query = new \WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $slug = get_post_field('post_name', get_post());
                $postItems[$index]['ID']            = get_the_ID();
                $postItems[$index]['permalink']     = get_the_permalink();
                $postItems[$index]['thumbnail_url'] = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $img_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                $postItems[$index]['thumbnail_alt'] = $alt_text;
                $postItems[$index]['post_title']    = get_the_title();
                $postItems[$index]['date']          = get_the_date('F j, Y');
                $postItems[$index]['slug']          = $slug;
                $postItems[$index]['is_external']   = false;

                $index++;
            }
        }

        wp_reset_postdata();

        if (count($postItems)) {
            return $postItems;
        }

        return [];
    }

    public function getMecSingle() {
        $single = new \MEC_skin_single();

        if (!is_singular('mec-events')) {
            return false;
        }
        $single_event_main = $single->get_event_mec(get_the_ID());
        $single_event_obj = $single_event_main[0];

        return $single_event_obj;
    }

    public function getMecEvent() {
        if (!is_singular('mec-events')) {
            return false;
        }

        $single_event_obj = $this->getMecSingle();
        $event = $single_event_obj->data;

        return $event;
    }

}
