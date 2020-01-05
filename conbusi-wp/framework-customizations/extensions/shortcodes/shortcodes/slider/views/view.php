<?php if(!defined('FW')) die('forbidden');


$custom_class = $atts['custom_class'];

?>


             
        <div class="<?php echo $custom_class?>">
          
            <div class="slider_area">
                <div class="slider_active owl-carousel">
<?php $slider = new WP_Query(array('post_type' => 'slider', 'order' => 'ASC', 'posts_per_page'=>'-1')); ?>
                        <?php 

                            global $post;

                        while ($slider->have_posts()) : $slider->the_post();

                                $slider_btn_text = fw_get_db_post_option($post->ID, 'slider_btn_text');
                                $slider_btn_url  = fw_get_db_post_option($post->ID, 'slider_btn_url');

                            ?>
   <div class="single_slider d-flex align-items-center overlay2" style="background-image: url(<?php echo get_the_post_thumbnail_url(array()); ?>);">
                
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                               <?php the_content();?>
                                <div class="video_service_btn">
                                    <a href="<?php echo $slider_btn_url?>" class="boxed-btn3"><?php echo $slider_btn_text;?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata();?>
   
</div>
</div>
</div>






 