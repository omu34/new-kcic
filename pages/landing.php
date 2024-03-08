<?php

/**
 *
 * Template Name: landing
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new-kcic
 */
get_header();


get_template_part('components/landing/headers');
get_template_part('components/landing/banner');
get_template_part('components/landing/who-we-are');
get_template_part('components/landing/what-we-do');
get_template_part('components/landing/key-milestones');
get_template_part('components/landing/our-clients');
get_template_part('components/landing/our-donors');
get_template_part('components/landing/testimonials');
get_template_part('components/landing/our-reports');
get_template_part('components/landing/news-discussions');
get_template_part('components/landing/newsletter');
get_template_part('components/landing/modal');

get_template_part('components/landing/footers');
?>
<?php get_footer(); ?>