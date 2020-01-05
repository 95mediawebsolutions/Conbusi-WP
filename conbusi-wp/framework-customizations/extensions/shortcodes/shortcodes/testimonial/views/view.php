<?php if (!defined('FW')) die('forbidden');


$testimonal = $atts['testimonal'];
$custom_class = $atts['custom_class'];

?>

<div class=" <?php echo $custom_class;?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                   
                    <?php foreach ($testimonal as $key => $testimonal_val) { ?>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                               
                                        <div class="quote">
                                            <img src="<?php echo $testimonal_val['testimonal_image']['url']?>" alt="">
                                        </div>
                                        <p><?php echo $testimonal_val['testimonal_details'];?></p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="<?php echo $testimonal_val['testimonial_author_image']['url'] ?>" alt="">
                                            </div>
                                            <h3><?php echo $testimonal_val['testimonal_author_fullname'];?></h3>
                                            <span><?php echo $testimonal_val['testimonal_author_postion']?></span>
                                          
                                        </div>
                                      
                                    </div>
                       
                        </div>
                        <?php } ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
