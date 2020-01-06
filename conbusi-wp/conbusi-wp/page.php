<?php
/**
 * page template
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

get_header();

?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

<?php the_content();?>

<?php endwhile;
endif; ?>


<?php get_footer();
