<?php
/**
 * @package TutorLMS/Templates
 * @version 1.5.8
 */


$tutor_social_share_icons = tutor_utils()->tutor_social_share_icons();
if ( ! tutor_utils()->count( $tutor_social_share_icons ) ) {
    return;
}

$share_config  = array(
    'title' => get_the_title(),
    'text'  => get_the_excerpt(),
    'image' => get_tutor_course_thumbnail( 'post-thumbnail', true ),

);


?>

<div class="student-course-img">
    <?php
        tutor_course_loop_thumbnail();
        $course_id = get_the_ID();
    ?>
    <div class="tutor-course-loop-header-meta">
        <?php
        $is_wishlisted = tutor_utils()->is_wishlisted($course_id);
        $has_wish_list = '';
        if ($is_wishlisted){
            $has_wish_list = 'has-wish-listed';
        }

        $action_class = '';
        if ( is_user_logged_in()){
            $action_class = apply_filters('tutor_wishlist_btn_class', 'tutor-course-wishlist-btn');
        }else{
            $action_class = apply_filters('tutor_popup_login_class', 'cart-required-login');
        }
        echo '<span class="tutor-course-wishlist"><a href="javascript:;" class="tutor-icon-fav-line '.$action_class.' '.$has_wish_list.' " data-course-id="'.$course_id.'"></a> </span>';
        ?>
    </div>
</div>


   <div class="course-cart">
      <div class="course-info-wrapper">
         <div class="cart-info-body">
            <span class="category-color category-color-1">
            <?php
              $course_categories = get_tutor_course_categories();
                if(!empty($course_categories) && is_array($course_categories ) && count($course_categories)){?>
                    <?php
                    foreach ($course_categories as $course_category){
                        $category_name = $course_category->name;
                        $category_link = get_term_link($course_category->term_id);
                        echo "<a href='$category_link'>$category_name </a>";
                    }
                }
            ?>
            </span>
            <a href="<?php echo get_the_permalink(); ?>">
               <h3><?php the_title(); ?></h3>
            </a>
            <div class="cart-lavel">
               <h5><?php print esc_html__('Level : ', 'visapass'); ?> <span><?php echo get_tutor_course_level(); ?></span></h5>
               <?php the_excerpt(); ?>
            </div>
            
            <div class="course-action">
               <a href="<?php the_permalink(); ?>" class="view-details-btn"> <?php _e('View Details','visapass'); ?></a>
                    <?php
                        $course_id = get_the_ID();
                        $is_wish_listed = tutor_utils()->is_wishlisted( $course_id );
                        
                        $action_class = '';
                        if ( is_user_logged_in() ) {
                            $action_class = apply_filters('tutor_wishlist_btn_class', 'wishlist-btn');
                        } else {
                            $action_class = apply_filters('tutor_popup_login_class', 'cart-required-login');
                        }
                        
                        echo '<button class="'. esc_attr( $action_class ) .' " data-course-id="'. esc_attr( $course_id ) .'" role="button">
                            <i class="' . ( $is_wish_listed ? 'flaticon-like' : 'flaticon-like') . '"></i>
                        </button>';
                    ?>

                    <div class="etlms-course-share">
                        <a data-tutor-modal-target="tutor-course-share-opener" href="#" class="tutor-btn tutor-btn-ghost etlms-course-share-btn">
                            <span class="etlms-course-share-icon">
                                <span class="c-share-btn" area-hidden="true"><i class="flaticon-previous"></i></span>
                            </span>
                        </a>
                    </div>
            </div>
         </div>
      </div>
   </div>

<!-- Course Social Share Popup -->

    <div id="tutor-course-share-opener" class="tutor-modal etlms-course-share-modal course-social-share-popup">
            <span class="tutor-modal-overlay"></span>
            <div class="tutor-modal-window">
                <div class="tutor-modal-content tutor-modal-content-white">
                    <button class="tutor-iconic-btn tutor-modal-close-o" data-tutor-modal-close>
                        <span class="tutor-icon-times" area-hidden="true"></span>
                    </button>
                    <div class="tutor-modal-body">
                        
                        <div class="etlms-course-share-modal-title tutor-fs-5 tutor-fw-medium tutor-color-black tutor-mb-16">
                            
                        </div>
                        
                        <div class="etlms-course-share-modal-sub-title tutor-fs-7 tutor-color-secondary tutor-mb-12">
                            <?php _e('Page Link', 'visapass') ?>
                        </div>
                        <div class="tutor-mb-32">
                            <input class="tutor-form-control" value="<?php echo get_permalink( get_the_ID() ); ?>" />
                        </div>
                        <div>
                           
                        <div class="etlms-course-share-modal-link tutor-color-black tutor-fs-6 tutor-fw-medium tutor-mb-16">
                             <h3><?php _e('Share on social media','visapass'); ?></h3>
                        </div>
                            
                        <div class="tutor-social-share-wrap" data-social-share-config="<?php echo esc_attr(wp_json_encode($share_config)); ?>">
                            <?php foreach ($tutor_social_share_icons as $icon) : ?>
                                        <button class="tutor-social-share-button <?php echo esc_html( $icon['share_class'] ); ?> ' elementor-animation-<?php echo esc_html( $settings['course_share_hover_animation'] ); ?>" style="background: <?php echo esc_html( $icon['color'] ); ?>">
                                            <?php echo esc_attr($icon['icon_html'] ); ?>
                                            &nbsp;<?php echo esc_html( $icon['text'] ); ?>
                                    </button>
                            <?php endforeach; ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

