<?php if(!defined('FW')) die('forbidden');

$information_call_us_header = $atts['information_call_us_header'];
$information_call_us_subheader =  $atts['information_call_us_subheader'];
$information_cta_button_text = $atts['information_cta_button_text'];
$custom_class = $atts['custom_class'];

?>

 
 <!-- Information_area  -->
    
        <div class="container <?php echo $custom_class;?>">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3><?php echo $information_call_us_header?></h3>
                        <p><?php echo $information_call_us_subheader?></p>
                        <a class="boxed-btn3" href="<?php echo $information_cta_button_url;?>"><?php echo $information_cta_button_text;?></a>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- /Information_area  end -->