<?php if(!defined('FW')) die('forbidden');

$button_label = $atts['button_label'];
$button_link =  $atts['button_link'];
$custom_class = $atts['custom_class'];

?>

 
 <button class="boxed-btn3 <?php echo $custom_class;?>"><a href="<?php echo $button_link?>"><?php echo $button_label;?></a</button>