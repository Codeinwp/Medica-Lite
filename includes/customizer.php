<?php

/**
 *	Sanitize Callback: Text
 */
function medica_lite_sanitize_callback_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 *	Sanitize Callback: Text Two
 */
function medica_lite_sanitize_callback_text_two( $input ) {
	if ( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	} else {
		return wp_kses_post( force_balance_tags( 'Edit this content from Customizer.' ) );
	}
}

/**
 *	Sanitize Callback: Text Three
 */
function medica_lite_sanitize_callback_text_three( $input ) {
	if ( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	} else {
		return wp_kses_post( force_balance_tags( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.' ) );
	}
}

/**
 *	Sanitize Callback: Textarea
 */
function medica_lite_sanitize_callback_textarea( $input ) {
	return htmlspecialchars_decode( $input );
}

function medica_lite_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /**
     * Socials Icons Settings
     */
    $wp_customize->add_section( 'social_icons_settings' , array(
    	'title'       => __( 'Socials Icon:', 'ti' ),
    	'priority'    => 200,
	) );

		/* Facebook - Link */
		$wp_customize->add_setting( 'ti_social_icons_facebook_link', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_social_icons_facebook_link', array(
		    'label'    => __( 'Facebook - Link:', 'ti' ),
		    'section'  => 'social_icons_settings',
		    'settings' => 'ti_social_icons_facebook_link',
			'priority' => '1',
		) );

		/* Twitter - Link */
		$wp_customize->add_setting( 'ti_social_icons_twitter_link', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_social_icons_twitter_link', array(
		    'label'    => __( 'Twitter - Link:', 'ti' ),
		    'section'  => 'social_icons_settings',
		    'settings' => 'ti_social_icons_twitter_link',
			'priority' => '2',
		) );

		/* YouTube - Link */
		$wp_customize->add_setting( 'ti_social_icons_youtube_link', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_social_icons_youtube_link', array(
		    'label'    => __( 'YouTube - Link:', 'ti' ),
		    'section'  => 'social_icons_settings',
		    'settings' => 'ti_social_icons_youtube_link',
			'priority' => '3',
		) );

		/* LinkedIn - Link */
		$wp_customize->add_setting( 'ti_social_icons_linkedin_link', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_social_icons_linkedin_link', array(
		    'label'    => __( 'LinkedIn - Link:', 'ti' ),
		    'section'  => 'social_icons_settings',
		    'settings' => 'ti_social_icons_linkedin_link',
			'priority' => '4',
		) );

	/**
     * Contact Settings
     */
    $wp_customize->add_section( 'contact_settings' , array(
    	'title'       => __( 'Contact:', 'ti' ),
    	'priority'    => 250,
	) );

		/* Telephone - Title */
		$wp_customize->add_setting( 'ti_telephone_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_telephone_title', array(
		    'label'    => __( 'Telephone - Title:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_telephone_title',
			'priority' => '1',
		) );

		/* Telephone - Number */
		$wp_customize->add_setting( 'ti_telephone_number', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_telephone_number', array(
		    'label'    => __( 'Telephone - Number:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_telephone_number',
			'priority' => '2',
		) );

		/* Contact - Address - Title */
		$wp_customize->add_setting( 'ti_contact_address_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_address_title', array(
		    'label'    => __( 'Contact Address - Title:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_contact_address_title',
			'priority' => '3',
		) );

		/* Contact - Address */
		$wp_customize->add_setting( 'ti_contact_address_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_address_content', array(
		            'label' 	=> __( 'Contact Address - Content:', 'ti' ),
		            'section' 	=> 'contact_settings',
		            'settings' 	=> 'ti_contact_address_content',
		            'priority' 	=> '4'
		        )
		    )
		);

	/**
     * Subheader
     */
    $wp_customize->add_section( 'subheader_settings' , array(
    	'title'       => __( 'Subheader:', 'ti' ),
    	'priority'    => 300,
	) );

		/* Background Image */
		$wp_customize->add_setting( 'ti_subheader_background_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_subheader_background_image', array(
		    'label'    => __( 'Background Image:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_background_image',
		    'priority' => '1',
		) ) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_subheader_article_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_subheader_article_title', array(
		    'label'    => __( 'Title:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_article_title',
			'priority' => '2',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_subheader_article_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_subheader_article_content', array(
		            'label' 	=> __( ' Content', 'ti' ),
		            'section' 	=> 'subheader_settings',
		            'settings' 	=> 'ti_subheader_article_content',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Article - Button Text */
		$wp_customize->add_setting( 'ti_subheader_article_button_text', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_subheader_article_button_text', array(
		    'label'    => __( 'Button Text:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_article_button_text',
			'priority' => '4',
		) );

		/* Article - Button Link */
		$wp_customize->add_setting( 'ti_subheader_article_button_link', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_subheader_article_button_link', array(
		    'label'    => __( 'Button Link:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_article_button_link',
			'priority' => '5',
		) );

	/**
     * Front Page
     */
    $wp_customize->add_section( 'frontpage_settings' , array(
    	'title'       => __( 'Frontpage:', 'ti' ),
    	'priority'    => 350,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_frontpage_article_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_frontpage_article_title', array(
		    'label'    => __( 'Article - Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_frontpage_article_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_frontpage_article_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_article_content', array(
		            'label' 	=> __( 'Article - Content:', 'ti' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'ti_frontpage_article_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		$wp_customize->add_setting( 'ti_frontpage_article_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_article_image', array(
		    'label'    => __( 'Article - Image:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_frontpage_article_image',
		    'priority' => '3',
		) ) );

	/*
    ** Features
    */
    $wp_customize->add_section( 'features_settings' , array(
    	'title'       => __( 'Features:', 'ti' ),
    	'priority'    => 400,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_features_article_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text_two' ) );
		$wp_customize->add_control( 'ti_features_article_title', array(
		    'label'    => __( 'Articles - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_article_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_features_article_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text_three' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_article_content', array(
		            'label' 	=> __( 'Article - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_article_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Box 1 - Image */
		$wp_customize->add_setting( 'ti_features_box1_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box1_image', array(
		    'label'    => __( 'Box 1 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box1_image',
		    'priority' => '3',
		) ) );

		/* Box 1 - Title */
		$wp_customize->add_setting( 'ti_features_box1_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_box1_title', array(
		    'label'    => __( 'Box 1 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box1_title',
			'priority' => '4',
		) );

		/* Box 1 - Title Link */
		$wp_customize->add_setting( 'ti_features_box1_titlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_features_box1_titlelink', array(
		    'label'    => __( 'Box 1 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box1_titlelink',
			'priority' => '5',
		) );

		/* Box 1 - Content */
		$wp_customize->add_setting( 'ti_features_box1_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box1_content', array(
		            'label' 	=> __( 'Box 1 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box1_content',
		            'priority' 	=> '6'
		        )
		    )
		);

		/* Box 2 - Image */
		$wp_customize->add_setting( 'ti_features_box2_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box2_image', array(
		    'label'    => __( 'Box 2 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_image',
		    'priority' => '7',
		) ) );

		/* Box 2 - Title */
		$wp_customize->add_setting( 'ti_features_box2_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_box2_title', array(
		    'label'    => __( 'Box 2 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_title',
			'priority' => '8',
		) );

		/* Box 2 - Title Link */
		$wp_customize->add_setting( 'ti_features_box2_titlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_features_box2_titlelink', array(
		    'label'    => __( 'Box 2 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_titlelink',
			'priority' => '9',
		) );

		/* Box 2 - Content */
		$wp_customize->add_setting( 'ti_features_box2_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box2_content', array(
		            'label' 	=> __( 'Box 2 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box2_content',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Box 3 - Image */
		$wp_customize->add_setting( 'ti_features_box3_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box3_image', array(
		    'label'    => __( 'Box 3 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_image',
		    'priority' => '11',
		) ) );

		/* Box 3 - Title */
		$wp_customize->add_setting( 'ti_features_box3_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_box3_title', array(
		    'label'    => __( 'Box 3 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_title',
			'priority' => '12',
		) );

		/* Box 3 - Title Link */
		$wp_customize->add_setting( 'ti_features_box3_titlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_features_box3_titlelink', array(
		    'label'    => __( 'Box 3 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_titlelink',
			'priority' => '13',
		) );

		/* Box 3 - Content */
		$wp_customize->add_setting( 'ti_features_box3_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box3_content', array(
		            'label' 	=> __( 'Box 3 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box3_content',
		            'priority' 	=> '14'
		        )
		    )
		);

		/* Box 4 - Image */
		$wp_customize->add_setting( 'ti_features_box4_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box4_image', array(
		    'label'    => __( 'Box 4 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_image',
		    'priority' => '15',
		) ) );

		/* Box 4 - Title */
		$wp_customize->add_setting( 'ti_features_box4_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_box4_title', array(
		    'label'    => __( 'Box 4 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_title',
			'priority' => '16',
		) );

		/* Box 4 - Title Link */
		$wp_customize->add_setting( 'ti_features_box4_titlelink', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_features_box4_titlelink', array(
		    'label'    => __( 'Box 4 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_titlelink',
			'priority' => '17',
		) );

		/* Box 4 - Content */
		$wp_customize->add_setting( 'ti_features_box4_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box4_content', array(
		            'label' 	=> __( 'Box 4 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box4_content',
		            'priority' 	=> '18'
		        )
		    )
		);

		/* Button - Text */
		$wp_customize->add_setting( 'ti_features_box4_button_text', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_box4_button_text', array(
		    'label'    => __( 'Button - Text:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_button_text',
			'priority' => '19',
		) );

		/* Button - Link */
		$wp_customize->add_setting( 'ti_features_box4_button_link', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'ti_features_box4_button_link', array(
		    'label'    => __( 'Button - Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_button_link',
			'priority' => '20',
		) );

	/*
    ** Content:
    */
    $wp_customize->add_section( 'content_settings' , array(
    	'title'       => __( 'Content:', 'ti' ),
    	'priority'    => 450,
	) );

		/* Latest News - Title */
		$wp_customize->add_setting( 'ti_features_latestnews_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_latestnews_title', array(
		    'label'    => __( 'Latest News - Title:', 'ti' ),
		    'section'  => 'content_settings',
		    'settings' => 'ti_features_latestnews_title',
			'priority' => '1',
		) );

		/* Latest News - Number of articles */
		$wp_customize->add_setting( 'ti_features_latestnews_numberofarticles', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_features_latestnews_numberofarticles', array(
			'default'			=> 2,
		    'label'    			=> __( 'Latest News - Number of articles:', 'ti' ),
		    'section'  			=> 'content_settings',
		    'settings' 			=> 'ti_features_latestnews_numberofarticles',
			'priority' 			=> '2',
			'sanitize_callback' => 'check_number'
		) );

	/*
    ** Footer
    */
    $wp_customize->add_section( 'footer_settings' , array(
    	'title'       => __( 'Footer:', 'ti' ),
    	'priority'    => 500,
	) );

		/* About Us - Title */
		$wp_customize->add_setting( 'ti_contact_aboutus_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_aboutus_title', array(
		    'label'    => __( 'About Us - Title:', 'ti' ),
		    'section'  => 'footer_settings',
		    'settings' => 'ti_contact_aboutus_title',
			'priority' => '1',
		) );

		/* About Us - Image */
		$wp_customize->add_setting( 'ti_footer_aboutus_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_footer_aboutus_image', array(
		    'label'    => __( 'About Us - Image:', 'ti' ),
		    'section'  => 'footer_settings',
		    'settings' => 'ti_footer_aboutus_image',
		    'priority' => '2',
		) ) );

		/* About Us - Content */
		$wp_customize->add_setting( 'ti_footer_aboutus_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_aboutus_content', array(
		            'label' 	=> __( 'About Us - Content', 'ti' ),
		            'section' 	=> 'footer_settings',
		            'settings' 	=> 'ti_footer_aboutus_content',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Menu - Title */
		$wp_customize->add_setting( 'ti_contact_menu_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_contact_menu_title', array(
		    'label'    => __( 'Menu - Title:', 'ti' ),
		    'section'  => 'footer_settings',
		    'settings' => 'ti_contact_menu_title',
			'priority' => '4',
		) );

	/*
    ** Contact Page
    */
    $wp_customize->add_section( 'contactpage_settings' , array(
    	'title'       => __( 'Contact Page:', 'ti' ),
    	'priority'    => 600,
	) );

		/* Map - Code */
		$wp_customize->add_setting( 'ti_contactpage_map_code', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_textarea' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contactpage_map_code', array(
		            'label' 	=> __( 'Map - Code:', 'ti' ),
		            'section' 	=> 'contactpage_settings',
		            'settings' 	=> 'ti_contactpage_map_code',
		            'priority' 	=> '1'
		        )
		    )
		);

	/*
    ** 404 Page
    */
    $wp_customize->add_section( '404page_settings' , array(
    	'title'       => __( '404 Page:', 'ti' ),
    	'priority'    => 750,
	) );

		/* Title */
		$wp_customize->add_setting( 'ti_404page_title', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_404page_title', array(
		    'label'    => __( 'Title:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_title',
			'priority' => '1',
		) );

		/* Subtitle */
		$wp_customize->add_setting( 'ti_404page_subtitle', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( 'ti_404page_subtitle', array(
		    'label'    => __( 'Subtitle:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_subtitle',
			'priority' => '2',
		) );

		/* Content */
		$wp_customize->add_setting( 'ti_404page_settings_content', array( 'sanitize_callback' => 'medica_lite_sanitize_callback_text' ) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_404page_settings_content', array(
		            'label' 	=> __( 'Content:', 'ti' ),
		            'section' 	=> '404page_settings',
		            'settings' 	=> 'ti_404page_settings_content',
		            'priority' 	=> '3'
		        )
		    )
		);

}
add_action( 'customize_register', 'medica_lite_customizer' );

if( class_exists( 'WP_Customize_Control' ) ):
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>