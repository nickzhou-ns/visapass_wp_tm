<div class="col-lg-4 col-md-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox post format-image mb-40'); ?>>
        <?php 
        if( has_post_thumbnail() ): ?>
            <div class="postbox__thumb mb-25">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
                </a>
            </div>
        <?php 
        endif; ?>

        <div class="postbox__text ">
            <div class="post-meta mb-10">
                <span><a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="far fa-user"></i> <?php print get_the_author(); ?> </a></span>
                <span><a href="<?php comments_link(); ?>"><i class="far fa-comments"></i> 23 Comments</a></span>
            </div>
            <h3 class="blog-title blog-title-sm">
                <a href="<?php the_permalink(); ?>"><?php print wp_trim_words(get_the_title(), 10, ''); ?></a>
            </h3>
            <div class="post-text">
                <p><?php print wp_trim_words(get_the_content(), 17, ''); ?></p>
            </div>
            <!-- blog btn -->
            <?php 
                $visapass_blog_btn     = get_theme_mod('visapass_blog_btn','Read More text'); 
                $visapass_blog_btn_icon     = get_theme_mod('visapass_blog_btn_icon','far fa-long-arrow-right'); 
                $visapass_blog_btn_switch     = get_theme_mod('visapass_blog_btn_switch'); 
                $visapass_blog_btn_icon_switch     = get_theme_mod('visapass_blog_btn_icon_switch'); 

            if( $visapass_blog_btn_switch ): ?>
                <div class="read-more-btn">
                    <a href="<?php the_permalink(); ?>" class="read-more"><?php print esc_html($visapass_blog_btn); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            <?php 
            endif; ?>    
        </div>
    </article>
</div>



