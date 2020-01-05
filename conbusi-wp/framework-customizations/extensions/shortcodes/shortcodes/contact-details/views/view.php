<?php if(!defined('FW')) die('forbidden');

$contact_address = $atts['contact_address'];
$contact_address_post_code =  $atts['contact_address_post_code'];
$telphone_number           =  $atts['telphone_number'];
$telphone_working_hours =  $atts['telphone_working_hours'];
$support_email =  $atts['support_email'];
$support_text =  $atts['support_text'];
$custom_class = $atts['custom_class'];

?>


     <div class="offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3><?php echo $contact_address;?></h3>
                                <p><?php echo $contact_address_post_code;?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><?php echo $telphone_number?></h3>
                                <p><?php echo $telphone_working_hours;?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><?php echo $support_email;?></h3>
                                <p><?php echo $support_text;?></p>
                            </div>
                        </div>
                    </div>

          