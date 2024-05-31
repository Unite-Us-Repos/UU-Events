<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

// Disable Gutenberg on the back end.
add_filter(
    'use_block_editor_for_post',
    function () {
        return false;
    },
);

// Disable Gutenberg for widgets.
add_filter(
    'use_widgets_blog_editor',
    function () {
        return false;
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        // Remove CSS on the front end.
        wp_dequeue_style('wp-block-library');

        // Remove Gutenberg theme.
        wp_dequeue_style('wp-block-library-theme');

        // Remove inline global CSS on the front end.
        wp_dequeue_style('global-styles');
    }, 20
);

// Add class to nav menu links
add_filter(
    'nav_menu_link_attributes',
    function ($classes, $item, $args) {

        if (isset($args->link_class)) {
            $classes['class'] = $args->link_class;
        }

        if (!$item->has_children && $item->menu_item_parent > 0) {
            $classes['class'] = $args->sub_link_class;
        }
        return $classes;
    }, 1, 3
);

add_filter(
    'xmsec_skin_query_args',
    function ($query_args, $sfid) {

        //modify $query_args here before returning it
        $query_args['xxmeta_query'] = array(
            'mec_start_date'    => array(
                'key'           => 'mec_start_date',
                'value'         => date("Y-m-d"),
                'compare'       => '>=',
                'type'          => 'DATE'
            ),
            'mec_start_day_seconds' => array(
                'key' => 'mec_start_day_seconds',
            ),
        );
       $query_args['xmec_address'] = 'array( 2, 5, 12, 14, 20 )';

        $query_args['xxorderby'] = array(
            'mec_start_date' => 'ASC',
            'mec_start_day_seconds' => 'ASC',
        );

        /*
        [post__in] => Array
        (
            [0] => 73
            [1] => 508
            [2] => 511
            [3] => 512
            [4] => 516
            [5] => 517
            [6] => 518
            [7] => 522
            [8] => 534
            [9] => 535
*/



        //return $query_args;
    }, 20, 2
);

add_action(
    'login_enqueue_scripts',
    function() { ?>
        <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg');
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
    <?php
    }
)
?>
<?php
/**
 * Forward /events/ to homepage
 */
add_action(
    'template_redirect',
    function () {
        if (is_archive('events')) {
            wp_redirect(home_url());
            exit;
        }
    }
);

/*
add_action( 'pre_get_posts',
    function ($query) {
        if ( ! is_admin() && $query->is_main_query() ) {
            // Not a query for an admin page.
            // It's the main query for a front end page of your site.

            if ( true ) {
                // It's the main query for a category archive.

                // Let's change the query for category archives.
                $query->set( 'posts_per_page', 2 );
            }
        }
    }, 100
);
*/

add_filter(
    'wp_mail_content_type',
    function () {
        return "text/html";
    }
);

add_filter(
    'retrieve_password_notification_email',
    function ($defaults, $key, $user_login, $user_data) {
        $defaults['headers'] = 'Content-Type: text/html';

        return $defaults;
    }, 99, 4
);

add_filter(
    'retrieve_password_message',
    function ($message, $key, $user_login) {
        $reset_url = network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login');
        $message = \Roots\view('partials.email-password-change', ['reset_url' => $reset_url])->render();
        return $message;
    }, 20, 3
);

add_filter( 'wp_new_user_notification_email', function( $wp_new_user_notification_email, $user, $blogname ) {
    $user_login = $user->user_login;
    $key = get_password_reset_key($user);
    $user_data = get_userdata($user->ID);
    $first_name = $user_data->first_name;

    $reset_url = network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login');
    $message = \Roots\view('partials.email-user-registration', ['login_url' => $reset_url, 'name' => $first_name])->render();


    $wp_new_user_notification_email['subject'] = sprintf( 'Welcome to %s.', $blogname );
    $wp_new_user_notification_email['headers'] = array('Content-Type: text/html; charset=UTF-8');
    $wp_new_user_notification_email['message'] = $message;

    return $wp_new_user_notification_email;

}, $priority = 10, $accepted_args = 3 );

