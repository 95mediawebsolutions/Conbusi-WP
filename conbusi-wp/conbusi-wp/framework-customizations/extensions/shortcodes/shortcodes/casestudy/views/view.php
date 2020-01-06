<?php if(!defined('FW')) die('forbidden');


$custom_class = $atts['custom_class'];

?>

   <!-- case_study_area  -->
    <div class="container">
        <div class="border_bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="case_active owl-carousel">
                        <?php $casestudy = new WP_Query(array('post_type' => 'casestudy', 'post_per_page' => '6', 'order' => 'ASC',)); ?>
                        <?php while ($casestudy->have_posts()) : $casestudy->the_post();?>
                        <div class="single_case">
                            <div class="case_thumb">
                                <?php the_post_thumbnail();?>
                            </div>
                            <div class="case_heading">
                                <?php
                                global $post;
                                            $taxonomy = 'casestudy-cates';
                                            $terms = wp_get_post_terms($post->ID, $taxonomy);
                                            if ($terms && !is_wp_error($terms)) :?>
                                <?php foreach ($terms as $serv_terms) : ?>
                                <span><?php echo $serv_terms->name; ?></span>
                                <?php endforeach ?>
                                <?php endif; ?>
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-xl-12">
                    <div class="more_close_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Cases</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
<!-- /case_study_area  -->