<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'demo' => array(
		'title'   => __('Slider Options', 'unyson'),
		'type'    => 'tab',

		'options' => array(
			'slider_btn_text' => array(
				'label' => __('Slider Button Text', 'unyson'),
				'type'  => 'text',
			),

			'slider_btn_url' => array(
				'label' => __('Slider Btn Url', 'unyson'),
				'type'  => 'text',
			),
			
		),


		
	),
);
