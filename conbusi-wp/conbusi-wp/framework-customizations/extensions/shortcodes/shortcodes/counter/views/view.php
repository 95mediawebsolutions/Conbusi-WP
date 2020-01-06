<?php if(!defined('FW')) die('forbidden');

$team_member_icon = $atts['team_member_icon'];
$team_member_counter_number = $atts['team_member_counter_number'];
$team_member_text = $atts['team_member_text'];

$business_success_icon = $atts['business_success_icon'];
$business_success_counter_number = $atts['business_success_counter_number'];
$business_success_text = $atts['business_success_text'];

$happy_client_icon = $atts['happy_client_icon'];
$happy_client_counter_number = $atts['happy_client_counter_number'];
$happy_client_text = $atts['happy_client_text'];

$business_done_icon = $atts['business_done_icon'];
$business_done_counter_number = $atts['business_done_counter_number'];
$business_done_text = $atts['business_done_text'];

$custom_class = $atts['custom_class'];

?>

      <!-- counter_area  -->
      
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo $team_member_icon['url']; ?>">
                        </div>
                        <h3> <span class="counter"><?php echo $team_member_counter_number;?></span> <span> +</span> </h3>
                        <p><?php echo $team_member_text;?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo $business_success_icon['url'];?>">
                        </div>
                        <h3> <span class="counter"><?php echo $business_success_counter_number?></span> <span>%</span> </h3>
                        <p><?php echo $business_success_text?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo $happy_client_icon['url'];?>" alt="">
                        </div>
                        <h3> <span class="counter"><?php echo $happy_client_counter_number;?></span></h3>
                        <p><?php echo $happy_client_text;?></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo $business_done_icon['url']?>" alt="">
                        </div>
                        <h3> <span class="counter"><?php echo $business_done_counter_number;?></span> </h3>
                        <p><?php echo $business_done_text;?></p>
                    </div>
                </div>
            </div>
        </div>
   
    <!-- /counter_area  -->