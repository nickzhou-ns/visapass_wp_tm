<?php
/**
 * Template for displaying lead info
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

global $post, $authordata;
$profile_url = tutor_utils()->profile_url($authordata->ID);
$terms = get_the_terms(get_the_ID(), 'course-category');


$visapass_tutor_course_details_author_meta_switch = get_theme_mod( 'visapass_tutor_course_details_author_meta_switch', true );

?>

<div class="tutor-single-course-segment tutor-single-course-lead-info course-detalis-wrapper mb-30 sa">
    <div class="page__title-content mb-25">
       <span class="category-color category-color-1">
            <?php
                $course_categories = get_tutor_course_categories();
                if(!empty($course_categories) && is_array($course_categories ) && count($course_categories)){?>
                    <?php
                    foreach ($course_categories as $course_category){
                        $category_name = $course_category->name;
                        $category_link = get_term_link($course_category->term_id);
                        echo "<a class='page__title-pre' href='$category_link'>$category_name </a>";
                    }
                }
            ?>
       </span>
       <div class="course-heading mt-25 mb-20">
           <h2><?php the_title(); ?></h2>
       </div>
        <?php
            $disable = get_tutor_option('disable_course_review');
            if ( ! $disable){
        ?>
       <div class="course-star">
           <h5>Review:</h5>
            <div class="tutor-single-course-rating">
                <?php
                $course_rating = tutor_utils()->get_course_rating();
                tutor_utils()->star_rating_generator($course_rating->rating_avg);
                ?>
                    <span class="tutor-single-rating-count">
                        <?php
                        echo visapass_kses_intermediate($course_rating->rating_avg);
                        echo '<i>('.visapass_kses_intermediate($course_rating->rating_count).')</i>';
                        ?>
                    </span>
            </div>
       </div>
       <?php } ?>
    </div>
    <?php if (!empty($visapass_tutor_course_details_author_meta_switch)) : ?>
    <div class="course-detelis-meta">
       <div class="course-meta-wrapper border-line-meta">
          <div class="course-meta-img">
             <?php echo get_avatar(get_the_author_meta('ID'), 32) ?>
          </div>
          <div class="course-meta-text">
             <span><?php _e('Teacher','visapass'); ?></span>
             <h6><a href="<?php echo tutor_utils()->profile_url($authordata->ID); ?>"><?php echo get_the_author(); ?></a></h6>
          </div>
       </div>

      <div class="course-Enroll border-line-meta">
        <p><?php echo _e('Total Enrolled','visapass'); ?></p>
        <span>
            <?php tutor_utils()->get_option( 'enable_course_total_enrolled' ) ? tutor_utils()->count_enrolled_users_by_course() : null?>
        </span>
      </div>
      
       <div class="course-update border-line-meta">
          <p><?php _e('Last Update:','visapass'); ?></p>
          <span><?php the_time( get_option('date_format') ); ?></span>
       </div>
    </div>
    <?php endif; ?>

    <div class="course__img w-img pt-35 mb-30">
       <?php the_post_thumbnail(); ?>
    </div>

    <div class="mydiv-end"></div>

	<?php do_action('tutor_course/single/lead_meta/after'); ?>
	<?php do_action('tutor_course/single/excerpt/before'); ?>

	<?php
	$excerpt = tutor_get_the_excerpt();
    $disable_about = get_tutor_option('disable_course_about');
	if (! empty($excerpt) && ! $disable_about){
		?>
        <div class="tutor-course-summery">
            <h4  class="tutor-segment-title"><?php esc_html_e('About Course', 'visapass') ?></h4>
			<?php print visapass_kses_intermediate($excerpt); ?>
        </div>
		<?php
	}
	?>

	<?php do_action('tutor_course/single/excerpt/after'); ?>

</div>