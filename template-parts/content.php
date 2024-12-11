<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package visapass
 */
if( is_single() ): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('blog ablog-4 blog__details--wrapper mb-55 format-image'); ?>>
        <?php if(has_post_thumbnail()): ?>
            <div class="ablog__img">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
            </div>
        <?php 
        endif; ?>
        <div class="ablog__text ablog__text4">
            <div class="ablog__meta ablog__meta4"> 
                <ul class="ablog-p0">
                    <li><a href=""><i class="fal fa-clock"></i> <?php the_time( get_option('date_format') ); ?> </a></li>
                    <li><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"><i class="far fa-user"></i> <?php print get_the_author(); ?></a></li>
                    <li><a href="<?php comments_link(); ?>"><i class="far fa-comments"></i> <?php comments_number(); ?></a></li>
                </ul>
            </div>
            <div class="post-text mb-40">
               <?php the_content(); ?>
                <?php
                    wp_link_pages( array(
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'visapass' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ) );
                ?>
            </div>
            <div class="blog-infos">
                <?php print visapass_get_tag(); ?>
            </div>
        </div>
    </article>
<?php
else: ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('blog mb-50 format-image'); ?>>
        <?php 
        if( has_post_thumbnail() ): ?>
            <div class="blog__thumb">
                <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
                </a>
            </div>
        <?php 
        endif; ?>
        <div class="ablog__text ablog__meta ablog__meta4">
            <ul class="ablog-p0">
                <li><a href=""><i class="fal fa-clock"></i> <?php the_time( get_option('date_format') ); ?> </a></li>
                <li><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"><i class="far fa-user"></i> <?php print get_the_author(); ?></a></li>
                <li><a href="<?php comments_link(); ?>"><i class="far fa-comments"></i> <?php comments_number(); ?></a></li>
            </ul>
            <h3 class="ablog__text--title4 mb-20">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
            </h3>
            <div class="post-text mb-40">
                <?php the_excerpt(); ?>
            </div>
            <!-- blog btn -->

            <?php 
                if (rtl_enable()) {
                    $visapass_blog_btn_rtl = get_theme_mod('visapass_blog_btn_rtl','Read More'); 
                 }
                else { 
                    $visapass_blog_btn = get_theme_mod('visapass_blog_btn','Read More'); 
                }
                
                $visapass_blog_btn_switch     = get_theme_mod('visapass_blog_btn_switch', true);  
            ?>
            <?php if(!empty($visapass_blog_btn_switch)) : ?>
                <div class="blog-btn mt-25">
                    <a href="<?php the_permalink(); ?>" class="v_blog_btn">
                        <?php print esc_html($visapass_blog_btn); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </article>

<?php
endif; ?>
