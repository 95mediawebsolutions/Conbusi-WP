<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Conbusi WP
 */

get_header();?>


<!-- bradcam_area  -->
<div class="bradcam_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Blog</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <?php
                            // If there are any posts
                            if (have_posts()):

                            // Load posts loop
                            while (have_posts()): the_post()?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                
                                <?php the_post_thumbnail('full', array('class' => 'card-img rounded-0'));?>
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo esc_html(get_the_date('d')); ?></h3>
                                    <p><?php echo esc_html(get_the_date('M')); ?></p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink();?>">
                                    <h2><?php the_title()?></h2>
                                </a>
                                <p><?php the_excerpt();?></p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo get_the_category();?>"><i class="fa fa-pencil-square-o"></i><span><?php the_category( ' ' ); ?></span></a></li>
                                    <li> <i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo get_comments_number(); ?></a></li>
                                    <?php if( has_tag() ): ?>
                                    <li><a href="#"><i class="fa fa-tags"></i> <?php the_tags( '', ', ' ); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </article>
                            
                        <?php endwhile;

                        // We're using numeric page navigation here.
                        the_posts_pagination(array(
                            'prev_text'		=> 'Previous', 'conbusi-wp',
                            'next_text'		=> 'Next', 'conbusi-wp'
                        ));

                        else:
                        ?>
                        <p><?php esc_html_e('Nothing to display.', 'conbusi-wp'); ?></p>
                        <?php endif; ?>
                        
                    </div>
                </div>



                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <?php get_footer();
