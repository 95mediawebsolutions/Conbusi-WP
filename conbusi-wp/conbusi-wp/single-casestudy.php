<?php
/**
 * The casestudy template file
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

<?php while (have_posts()) : the_post(); ?>
<!-- bradcam_area  -->
<div class="bradcam_area"
    style="background-image: url(<?php echo get_the_post_thumbnail_url(array()); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3><?php the_title();?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="case_details_area">
    <div class="container">
        <div class="border_bottom">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="details_title">
                        <?php
                        global $post;
                        $taxonomy = 'casestudy-cates';
                        $terms = wp_get_post_terms($post->ID, $taxonomy);
                        if ($terms && !is_wp_error($terms)) :?>
                        <?php foreach ($terms as $serv_terms) : ?>
                        <span><?php echo $serv_terms->name; ?></span>
                        <?php endforeach ?>
                        <?php endif; ?>
                        <h3><?php the_title();?>
                        </h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="case_thumb">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
                <div class="col-xl-10">
                    <div class="details_main_wrap">
                        <p class="details_info">
                            <?php the_content();?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- /case_study_area  -->
<?php endwhile; ?>

<?php get_footer();
