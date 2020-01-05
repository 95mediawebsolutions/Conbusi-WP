<?php 

/**
 * Conbusi Theme Customizer
 *
 * @package Conbusi WP
 */

function fancy_lab_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> __( 'Copyright Settings', 'conbusi-wp' ),
			'description'	=> __( 'Copyright Section', 'conbusi-wp' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> __( 'Copyright', 'conbusi-wp' ),
					'description'	=> __( 'Please, add your copyright information here', 'conbusi-wp' ),
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);


			// Header Section




	$wp_customize->add_section(
		'sec_header', array(
			'title'			=> __( 'Header Settings', 'conbusi-wp' ),
			'description'	=> __( 'Header Section', 'conbusi-wp' )
		)
	);


		// Field 1 
		$wp_customize->add_setting(
			'set_header_welcome', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);
	
		$wp_customize->add_control(
			'set_header_welcome', array(
				'label'			=> __( 'Enter Welcome Message Here', 'conbusi-wp' ),
				'description'	=> __( 'Please add your welcome message here', 'conbusi-wp' ),
				'section'		=> 'sec_header',
				'type'			=> 'text'
			)
		);

	// Field 2
	$wp_customize->add_setting(
		'set_header_email', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'sanitize_email'
		)
	);

	$wp_customize->add_control(
		'set_header_email', array(
			'label'			=> __( 'Support Email Address', 'conbusi-wp' ),
			'description'	=> __( 'Please add your support email', 'conbusi-wp' ),
			'section'		=> 'sec_header',
			'type'			=> 'text'
		)
	);

	// Field 3
	$wp_customize->add_setting(
		'set_header_phone', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_header_phone', array(
			'label'			=> __( 'Support Phone Number', 'conbusi-wp' ),
			'description'	=> __( 'Please add your support Phone number', 'conbusi-wp' ),
			'section'		=> 'sec_header',
			'type'			=> 'text'
		)
	);

	// Field 4
	$wp_customize->add_setting(
		'set_header_facebook', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'set_header_facebook', array(
			'label'			=> __( 'Facebook Page Url', 'conbusi-wp' ),
			'description'	=> __( 'Please add your facebook page here', 'conbusi-wp' ),
			'section'		=> 'sec_header',
			'type'			=> 'text'
		)
	);

	// Field 5
	$wp_customize->add_setting(
		'set_header_twitter', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'set_header_twitter', array(
			'label'			=> __( 'Twitter Page Url', 'conbusi-wp' ),
			'description'	=> __( 'Please add your twitter handle here', 'conbusi-wp' ),
			'section'		=> 'sec_header',
			'type'			=> 'text'
		)
	);

	// Field 6
	$wp_customize->add_setting(
		'set_header_linkedin', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'set_header_linkedin', array(
			'label'			=> __( 'Linkedin Page Url', 'conbusi-wp' ),
			'description'	=> __( 'Please add your linkedin Url', 'conbusi-wp' ),
			'section'		=> 'sec_header',
			'type'			=> 'text'
		)
	);


	// Field 7
	$wp_customize->add_setting(
		'set_header_btn_text', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_header_btn_text', array(
			'label'			=> __( 'Get a Quote', 'conbusi-wp' ),
			'description'	=> __( 'Please Add text for get a quote', 'conbusi-wp' ),
			'section'		=> 'sec_header',
			'type'			=> 'text'
		)
	);

		// Field 8
		$wp_customize->add_setting(
			'set_header_btn_url', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'esc_url_raw'
			)
		);
	
		$wp_customize->add_control(
			'set_header_btn_url', array(
				'label'			=> __( 'Quote Url', 'conbusi-wp' ),
				'description'	=> __( 'Please Add quote button url', 'conbusi-wp' ),
				'section'		=> 'sec_header',
				'type'			=> 'text'
			)
		);


}
add_action( 'customize_register', 'fancy_lab_customizer' );

