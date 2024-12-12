<?php
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
?>

<div class="page-area pt-120 pb-120">
    <div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="visapass-page-content">
					<?php 
					if( have_posts() ):
						while(  have_posts() ): the_post();
							get_template_part('template-parts/content','page');
						endwhile;
						if ( is_page(23) ) : 
							get_template_part('about/inc_About_us_area');
							get_template_part('about/inc_Ab_fact_area_about');
							get_template_part('about/inc_About_Tabs_area');
							get_template_part('about/inc_Histry_Tabs_area');
							get_template_part('about/inc_intro_area_about');
							get_template_part('about/inc_testimonail_about');
						endif; 
						if ( is_page(30) ) : 
							get_template_part('contact/inc_Contact_area');
							get_template_part('contact/inc_Contact_group_info');
							get_template_part('contact/inc_clients_section');

						endif; 
					else:
						get_template_part('template-parts/content', 'none');
					endif; ?>
				</div>
			</div>
		</div>
    </div>
</div>

<?php
get_footer();
