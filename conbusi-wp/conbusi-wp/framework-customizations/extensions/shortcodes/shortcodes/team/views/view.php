<?php if(!defined('FW')) die('forbidden');


$custom_class = $atts['custom_class'];

?>

 <!-- team_area  -->
            <div class="container">
                <div class="border_bottom">
                    <div class="row">
                        <?php $team = new WP_Query(array('post_type' => 'team', 'order' => 'ASC', 'posts_per_page'=>'-1')); ?>
                        <?php 
                            global $post;
                
                    
                        while ($team->have_posts()) : $team->the_post();

                        $facebook = fw_get_db_post_option($post->ID, 'facebook');
                        $twitter = fw_get_db_post_option($post->ID, 'twitter');
                        $instagram = fw_get_db_post_option($post->ID, 'instagram');
                            ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_team">
                                <div class="team_thumb">
                                   <?php the_post_thumbnail();?>
                                </div>
                                <div class="team_info text-center">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_content();?></p>
                                    <div class="social_link">
                                        <ul>
                                            <li><a href="<?php echo $facebook;?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="<?php echo $twitter;?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="<?php echo $instagram;?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
    <!-- /team_area  -->