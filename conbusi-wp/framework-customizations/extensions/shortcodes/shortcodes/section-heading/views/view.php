<?php if(!defined('FW')) die('forbidden');

$heading = $atts['section_heading'];
$custom_class = $atts['custom_class'];

?>

<div class="col-xl-12">
    <div class="section_title text-center mb-40">
        <h3 class="<?php echo $custom_class;?>"><?php echo $heading;?></h3>
    </div>
</div>