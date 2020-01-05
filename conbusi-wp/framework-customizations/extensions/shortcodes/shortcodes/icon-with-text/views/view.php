<?php if(!defined('FW')) die('forbidden');

$text_icon = $atts['text_icon'];
$text_heading = $atts['text_heading'];
$text_description = $atts['text_description'];
$text_url = $atts['text_url'];
$text_url_text = $atts['text_url_text'];
$custom_class = $atts['custom_class'];

?>

<!-- service_area_start -->

<div class="<?php echo $custom_class; ?>">
    <div class="single_service text-center">
        <div class="service_icon">
            <img src="<?php echo $text_icon['url'];?>">
        </div>
        <h3>
            <?php echo $text_heading;?>
        </h3>
        <p>
            <?php echo $text_description;?>
        </p>
        <a href="<?php echo $text_url;?>" class="learn_more"><?php echo $text_url_text?></a>
    </div>
</div>


<!-- service_area_end -->