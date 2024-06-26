<?php
/**
 * Template Name: mec-event-API
 * This template will only display the mec shortcode you entered in the page.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo MEC_EXT_URL.'/assets/iframeResizer.contentWindow.min.js' ?>"></script>
</head>
<body>
<?php
    while ( have_posts() ) : the_post();  
        the_content();
    endwhile;
?>
<?php wp_footer(); ?>
</body>
</html>