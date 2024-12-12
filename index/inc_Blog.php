<!-- inc_Blog_ start -->
<section page="inc_Blog" class="blog-area pt-120 pb-90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="section_title_wrapper mb-50">
          <span class="subtitle"> Recent Blog </span>
          <h2 class="section-title"> Recent Updates of Visa <br>
            And Immigration </h2>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="section-title-right mb-30 mr-20">
          <p>We have helped students, business persons, tourists, clients with medical needs to acquire U.S. visas. Besides, we also help with other family and provide counseling services for immigration.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      // Define the query arguments
      $args = array(
        'posts_per_page' => 3, // Number of posts to display
        'post_status'    => 'publish', // Only show published posts
        'ignore_sticky_posts' => true, // Ignore sticky posts
      );

      // Instantiate the custom query
      $latest_posts = new WP_Query($args);

      // Check if there are posts
      if ($latest_posts->have_posts()) :
        // Loop through the posts
        while ($latest_posts->have_posts()) : $latest_posts->the_post();
          // Get the post ID
          $post_id = get_the_ID();
          // Get the featured image URL
          $img_url = get_the_post_thumbnail_url($post_id, 'full');
          // Get the post date
          $post_date = get_the_date('d M Y');
          // Get the comment count
          $comment_count = get_comments_number($post_id);
          // Get the post title
          $post_title = get_the_title();
          // Get the post excerpt
          $post_excerpt = get_the_excerpt();
          // Get the permalink
          $post_url = get_permalink();
          // "Read More" text
          $read_more = __('Read More', 'your-text-domain');
      ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <article class="blog mb-30">
              <div class="blog__thumb">
                <a href="<?php echo esc_url($post_url); ?>">
                  <?php if ($img_url) : ?>
                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($post_title); ?>">
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/default.jpg" alt="<?php echo esc_attr($post_title); ?>">
                  <?php endif; ?>
                </a>
              </div>
              <div class="blog__content">
                <div class="blog-meta">
                  <span>
                    <i class="fal fa-calendar-day"></i>
                    <?php echo esc_html($post_date); ?>
                  </span>
                  <span>
                    <i class="far fa-user"></i>
                    <?php the_author(); ?>
                  </span>
                  <span>
                    <i class="far fa-comments"></i>
                    <a href="<?php echo esc_url($post_url); ?>#comments">
                      <?php echo esc_html($comment_count); ?>
                    </a>
                  </span>
                </div>
                <div class="blog-text">
                  <h3 class="blog__content__title">
                    <a href="<?php echo esc_url($post_url); ?>">
                      <?php echo esc_html($post_title); ?>
                    </a>
                  </h3>
                  <p><?php echo esc_html($post_excerpt); ?></p>
                  <div class="read-more">
                    <a href="<?php echo esc_url($post_url); ?>">
                      <?php echo esc_html($read_more); ?>
                      <i class="fal fa-long-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
          </div>
      <?php
        endwhile;
        // Restore original Post Data
        wp_reset_postdata();
      else :
        echo '<p>' . __('No recent posts available.', 'your-text-domain') . '</p>';
      endif;
      ?>
    </div>
  </div>
</section>
<!-- inc_Blog_ end -->
