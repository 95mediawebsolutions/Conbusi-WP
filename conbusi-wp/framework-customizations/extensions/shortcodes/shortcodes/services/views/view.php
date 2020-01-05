<?php if (!defined('FW')) die('forbidden');

$custom_class = $atts['custom_class'];

?>

<!-- service_area_start -->
    <div class="<?php echo $custom_class?>">
        <div class="container">
            <div class="row">
                <?php $service = new WP_Query(array('post_type' => 'service',  'order' => 'ASC', 'posts_per_page'=>'-1')); ?>        
                        <?php 
                            global $post;
                        while ($service->have_posts()) : $service->the_post();
                        $service_btn_text = fw_get_db_post_option($post->ID, 'service_btn_text');
                        $service_btn_url = fw_get_db_post_option($post->ID, 'service_btn_url');
                            ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                           <?php the_post_thumbnail();?>
                        </div>
                        <h3><?php the_title();?></h3>
                        <p><?php the_content();?></p>
                        <a href="<?php echo $service_btn_url;?>" class="learn_more"><?php echo $service_btn_text;?></a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
        </div>
    </div>
    <!-- service_area_end -->