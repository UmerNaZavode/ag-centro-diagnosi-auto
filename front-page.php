<?php

/**
 * Template Name: Front page
 */
get_header();
?>
<?php get_template_part("template-parts/home/home-intro"); ?>
<?php get_template_part("template-parts/home/who-we-are"); ?>
<?php echo do_shortcode("[our-services]"); ?>
<?php get_template_part("template-parts/home/why-us"); ?>
<?php get_template_part("template-parts/home/home-gallery"); ?>
<?php get_footer(); ?>
