<?php
/*
Template Name: Custom Home
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package visapass
 */

get_header();
get_template_part('index/inc_hero_area_index');
get_template_part('index/inc_visa_area_index');
get_template_part('index/inc_featurs_area_index');
get_template_part('index/inc_Scholarship_Programs');
get_template_part('index/inc_About_start');
get_template_part('index/inc_fact_area');
get_template_part('index/inc_popularct');
get_template_part('index/inc_Country_all');
get_template_part('index/inc_Globall_area_index');
get_template_part('index/inc_Calltoaction_area');
get_template_part('index/inc_team_area');
get_template_part('index/inc_Our_Partners');
get_template_part('index/inc_testimonail_index');
get_template_part('index/inc_Blog');

get_footer();
