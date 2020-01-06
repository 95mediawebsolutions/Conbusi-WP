<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'demo' => array(
		'title'   => __('Service Options', 'unyson'),
		'type'    => 'tab',

		'options' => array(
			'service_btn_text' => array(
				'label' => __('Service Button Text', 'unyson'),
				'type'  => 'text',
			),

			'service_btn_url' => array(
				'label' => __('Service Btn Url', 'unyson'),
				'type'  => 'text',
			),
			
		),


		
	),
);
