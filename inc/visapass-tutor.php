<?php 
// visapass lesson
function visapass_lesson(){ 
    global $post, $authordata;

    $visapass_lesson_count = visapass_utils()->get_lesson_count_by_course(get_the_ID());

    $course_rating = visapass_utils()->get_course_rating();
?>
<div class="course__meta d-flex align-items-center justify-content-between">
    
     <div class="course__lesson">
        <span><i class="far fa-book-alt"></i>
            <?php print esc_html($visapass_lesson_count); ?>
            <?php print esc_html__('lessons', 'visapass'); ?>
        </span>
     </div>
     <div class="course__rating">
        <span>
        <?php
            if ($course_rating->rating_avg >= 0) {
                echo '<i class="icon_star"></i>' . apply_filters('visapass_course_rating_average', $course_rating->rating_avg) . '';

                echo '<span class="rating-count-gap">(' . apply_filters('visapass_course_rating_count', $course_rating->rating_count) . ') </span>';
            }
        ?> 
        </span>       
     </div>
</div> 
<?php
} 

add_action( 'visapass_course_lesson', 'visapass_lesson' );

// visapass instructor
function visapass_instructor(){ 
    global $post, $authordata;

    $profile_url = visapass_utils()->profile_url($authordata->ID);

?>
<div class="course__teacher d-flex align-items-center">
    <div class="course__teacher-thumb mr-15">
     <?php echo get_avatar(get_the_author_meta('ID'), 32) ?>
    </div>
    <h6><a href="<?php echo esc_url($profile_url); ?>"><?php echo get_the_author_meta('display_name', get_the_author_meta('ID')); ?></a></h6>
</div> 
<?php
} 

add_action( 'visapass_course_instructor', 'visapass_instructor' );

// visapass footer
function visapass_course_footer(){ 
    global $post, $authordata;

    $profile_url = visapass_utils()->profile_url($authordata->ID);

?>
<div class="course__more d-flex justify-content-between align-items-center">
   <div class="course__status">
        <?php
            $course_id = get_the_ID();
            $default_price = apply_filters('visapass-loop-default-price', __('Free', 'visapass'));
            $price_html = '<span> ' . $default_price . '</span>';
            if (visapass_utils()->is_course_purchasable()) {
                $product_id = visapass_utils()->get_course_product_id($course_id);
                $product = wc_get_product($product_id);

                if ($product) {
                    $price_html = '<span> ' . $product->get_price_html() . ' </span>';
                }
            }
            echo visapass_kses_intermediate($price_html);
        ?>
   </div>
   <div class="course__btn">
      <a href="<?php the_permalink(); ?>" class="link-btn">
         <?php _e('Know Details','visapass'); ?>
         <i class="far fa-arrow-right"></i>
         <i class="far fa-arrow-right"></i>
      </a>
   </div>
</div>
<?php
} 

add_action( 'visapass_course_footer_down', 'visapass_course_footer' );

// visapass footer
function visapass_course_enroll_info(){ 
    global $post, $authordata;

    $profile_url = visapass_utils()->profile_url($authordata->ID);
    $visapass_lesson_count = visapass_utils()->get_lesson_count_by_course(get_the_ID());

    $disable_course_duration = get_visapass_option('disable_course_duration');
    $disable_total_enrolled = get_visapass_option('disable_course_total_enrolled');
    $disable_update_date = get_visapass_option('disable_course_update_date');
    $course_duration = get_visapass_course_duration_context();
    $disable_course_level = get_visapass_option('disable_course_level');
    $disable_course_share = get_visapass_option('disable_course_share');
    $course_language = function_exists( 'get_field' ) ? get_field( 'course_language' ) : NULL;
?>
<div class="course__video-content mb-35">
    <ul>
        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                 <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                 <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
              </svg>
           </div>
           <div class="course__video-info">
              <h5><span><?php _e('Instructor :','visapass'); ?></span> <?php echo get_the_author_meta('display_name', get_the_author_meta('ID')); ?></h5>
           </div>
        </li>
        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                 
                 <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                 <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
              </svg>
           </div>
           <div class="course__video-info">
              <h5><span><?php _e('Lectures :','visapass'); ?></span><?php print esc_html($visapass_lesson_count); ?></h5>
           </div>
        </li>
        <?php if( !empty($course_duration) && !$disable_course_duration) : ?>
        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                 <circle class="st0" cx="8" cy="8" r="6.7"/>
                 <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>
              </svg>
           </div>
           <div class="course__video-info">
              <h5><span><?php _e('Duration :','visapass'); ?></span><?php echo esc_html($course_duration); ?></h5>
           </div>
        </li>
        <?php endif; ?>
        <?php if( !$disable_total_enrolled) : ?>
        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <svg>
                 <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                 <circle class="st0" cx="8" cy="4.7" r="2.7"/>
              </svg>
           </div>
           <div class="course__video-info">
              <h5><span><?php _e('Enrolled :','visapass'); ?></span><?php echo (int) visapass_utils()->count_enrolled_users_by_course(); ?> <?php _e('students','visapass'); ?></h5>
           </div>
        </li>
        <?php endif; ?>
        <?php if ( !$disable_course_level) : ?>
        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <i class="fal fa-tag"></i>
           </div>
           <div class="course__video-info">
              <h5><span><?php _e('Course level :','visapass'); ?></span><?php echo get_visapass_course_level(); ?></h5>
           </div>
        </li>
        <?php endif; ?>

        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <svg>
                 <circle class="st0" cx="8" cy="8" r="6.7"/>
                 <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                 <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
              </svg>
           </div>
           <div class="course__video-info">
              <h5><span><?php _e('Language :','visapass'); ?></span><?php print esc_html($course_language); ?></h5>
           </div>
        </li>        

        <?php if ( !$disable_course_share ) : ?>
        <li class="d-flex align-items-center">
           <div class="course__video-icon">
              <i class="fal fa-share-alt"></i>
           </div>
           <div class="course__video-info">
              <?php visapass_social_share(); ?>
           </div>
        </li>
        <?php endif; ?>

    </ul>
</div>
<div class="course__payment mb-35">
    <h3><?php _e('Payment :','visapass'); ?></h3>
    <a href="#">
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/course/payment/payment-1.png" alt="img">
    </a>
</div>
<?php
} 

add_action( 'visapass_course_enroll_info_list', 'visapass_course_enroll_info' );

// visapass single tab
function visapass_course_info_tab(){ 
    global $post, $authordata;
    $course_tags = get_visapass_course_tags();
    $disable_course_share = get_visapass_option('disable_course_share');
?>
    <div class="course__tab-2 mb-45">
       <ul class="nav nav-tabs" id="courseTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span><?php _e('Discription','visapass'); ?></span> </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span><?php _e('Curriculum','visapass'); ?></span> </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span><?php _e('Reviews','visapass'); ?></span> </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span><?php _e('Instructor','visapass'); ?></span> </button>
          </li>
        </ul>
    </div>
    <div class="course__tab-content mb-95">
       <div class="tab-content" id="courseTabContent">
          <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
             <div class="course__description">
                <?php visapass_course_content(); ?>
                <?php visapass_course_benefits_html(); ?>

                <?php if(is_array($course_tags) && count($course_tags)) : ?>
                <div class="course__tag-2 mb-35 mt-35">
                   <i class="fal fa-tag"></i>
                        <?php
                            foreach ($course_tags as $course_tag){
                                $tag_link = get_term_link($course_tag->term_id);
                                echo "<a href='$tag_link'> $course_tag->name<span>,</span> </a>";
                            }
                        ?>
                </div>
                <?php endif; ?>


                <?php if ( !$disable_course_share ) : ?>
                  <div class="course__share">
                     <h3><?php _e('Share :','visapass'); ?></h3>
                     <?php visapass_social_share(); ?>
                  </div>
                
                <?php endif; ?>

             </div>
          </div>
          <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
             <div class="course__curriculum">
                <?php visapass_course_topics(); ?>
             </div>
          </div>
          <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
             <div class="course__review">
                <?php visapass_course_target_reviews_html(); ?>
                <?php visapass_course_target_review_form_html(); ?>
             </div>
          </div>
          <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
             <div class="course__member mb-45">
                <?php visapass_course_instructors_html(); ?>
             </div>
          </div>
          

          
        </div>
    </div>
<?php
} 

add_action( 'visapass_course_info_tab_action', 'visapass_course_info_tab' );