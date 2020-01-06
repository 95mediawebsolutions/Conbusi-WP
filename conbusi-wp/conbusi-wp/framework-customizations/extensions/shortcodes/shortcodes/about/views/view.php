<?php if(!defined('FW')) die('forbidden');

$about_heading = $atts['about_heading'];
$about_image = $atts['about_image'];
$about_description = $atts['about_description'];
$about_link_url = $atts['about_link_url'];
$about_url_text = $atts['about_url_text'];
$custom_class = $atts['custom_class'];

?>

    <!-- about_info_area start  -->
    
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3><?php echo $about_heading;?></h3>
                        <p><?php echo $about_description;?></p>
                            <a href="<?php echo $about_link_url;?>" class="boxed-btn3"><?php echo $about_url_text;?></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                         <img src="<?php echo $about_image['url'];?>">
                    </div>
                </div>
            </div>
        </div>
    <!-- /about_info_area end  -->