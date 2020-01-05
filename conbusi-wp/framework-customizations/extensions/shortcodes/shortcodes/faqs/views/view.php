<?php if (!defined('FW')) die('forbidden');

$faq_image = $atts['faq_image'];
$faq_header = $atts['faq_header'];
$faqs = $atts['faqs'];
$custom_class = $atts['custom_class'];

?>

<!-- accordion  -->

            <div class="container <?php echo $custom_class;?>">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion_thumb">
                            <img src="<?php echo $faq_image['url'];?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq_ask">
                            <h3><?php echo $faq_header;?></h3>
                            <?php foreach ($faqs as $key => $faq_vals) { ?>
                                
                                <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                                           <?php echo $faq_vals['faq_question']?>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                <div class="card-body"> <?php echo $faq_vals['faq_answer']?>
                                                  <?php echo $faq_vals['faq_answer']?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
     
        <!-- accordion  -->