<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'demo' => array(
		'title'   => __('Team Social Media', 'unyson'),
		'type'    => 'tab',

		'options' => array(
			'facebook' => array(
				'label' => __('Facebook Page Url', 'unyson'),
				'type'  => 'text',
			),

			'twitter' => array(
				'label' => __('Twitter Page Url', 'unyson'),
				'type'  => 'text',
			),


			'instagram' => array(
				'label' => __('Instagram Page', 'unyson'),
				'type'  => 'text',
			),
		),


		
	),
);
