<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package 
 */

get_header();
?>



<!-- bradcam_area  -->
<div class="bradcam_area"
    style="background-image: url();">
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

                <header>
					<h1><?php esc_html_e( 'Page not found', 'conbusi-wp' ); ?></h1>
					<p><?php esc_html_e( 'Unfortunately, the page you tried to reach does not exist on this site', 'conbusi-wp' ); ?></p>
				</header>


<?php get_footer(); ?>