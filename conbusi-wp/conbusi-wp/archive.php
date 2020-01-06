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
                    <?php the_archive_title( '<h3 class="article-title">', '</h3>' );?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<?php if( have_posts() ):?>

    <!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding <?php post_class(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
           <?php  while( have_posts() ): the_post(); ?>
                <div class="single-post">
                    <?php the_post_thumbnail(); ?>
                    <div class="blog_details">
                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                            </li>

                            <?php if( has_category() ): ?>
                                <li><a href="<?php echo get_the_category();?>"><i class="fa fa-pencil-square-o"></i><span><?php the_category( ' ' ); ?></span></a></li>
                            <?php endif; ?>

                            <?php if( has_tag() ): ?>
                            <li><i class="fa fa-tags"></i> <?php the_tags( '', ', ' ); ?></li>
                            <?php endif; ?>
                        </ul>
                        <?php the_content();?>
                    </div>
                </div>
            
                <?php endwhile;?>
                   
               

                <?php
        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()):
                            comments_template();
                        endif;
        ?>

<div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                    <div class="col-sm-4 text-center my-2 my-sm-0">
                <?php
        wp_link_pages(
    array(
                'before'	=> '<p class="inner-pagination">' . esc_html__('Pages', 'conbusi-wp'),
                'after'		=> '</p>',
            )
);
        ?>
        </div>
</div>
</div>
               
            </div>
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

    <?php endif; ?>
<?php get_footer(); ?>