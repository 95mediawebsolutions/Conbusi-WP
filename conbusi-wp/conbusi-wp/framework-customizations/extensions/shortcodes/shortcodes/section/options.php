<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),

	'custom_class' => array(
		'label' => __('Custom Class', 'fw'),
		'desc'  => __('Custom CSS Class Name', 'fw'),
		'type'  => 'text',
	),

	'padding_top' => array(
		'label'   => __( 'Padding Top', 'unyson' ),
		'type'    => 'radio-text',
		'value'   => '0',
		'choices' => array(
			'0px'  => __( '0px', 'unyson' ),
			'50px'  => __( '50px', 'unyson' ),
			'100px' => __( '100px', 'unyson' ),
		),
	),

	'padding_left' => array(
		'label'   => __( 'Padding Left', 'unyson' ),
		'type'    => 'radio-text',
		'value'   => '0',
		'choices' => array(
			'0px'  => __( '0px', 'unyson' ),
			'50px'  => __( '50px', 'unyson' ),
			'100px' => __( '100px', 'unyson' ),
		),
	),

	'padding_right' => array(
		'label'   => __( 'Padding Right', 'unyson' ),
		'type'    => 'radio-text',
		'value'   => '0',
		'choices' => array(
			'0px'  => __( '0px', 'unyson' ),
			'50px'  => __( '50px', 'unyson' ),
			'100px' => __( '100px', 'unyson' ),
		),
	),

	'padding_bottom' => array(
		'label'   => __( 'Padding Bottom', 'unyson' ),
		'type'    => 'radio-text',
		'value'   => '0',
		'choices' => array(
			'0px'  => __( '0px', 'unyson' ),
			'50px'  => __( '50px', 'unyson' ),
			'100px' => __( '100px', 'unyson' ),
		),
	),
);
