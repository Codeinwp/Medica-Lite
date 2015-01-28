<?php
/**
 *	Customizer
 */
function medica_lite_customizer( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /**
     *	WP Customize Textarea Control
     */
    class WP_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';

		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	/**
	 *	Sanitize Text
	 */
	function medica_lite_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}

	/**
	 *	Sanitize HTML Special Chars Decode
	 */
	function medica_lite_sanitize_callback_htmlspecialchars_decode( $input ) {
		return htmlspecialchars_decode( $input );
	}

    /**
     *	General
     */
    $wp_customize->add_section( 'medica_lite_general' , array(
    	'title'			=> __( 'General', 'medica_lite' ),
    	'priority'		=> 200,
    	'description'	=> __( 'Medica Lite theme general options. This options will show in header and footer.', 'medica_lite' )
	) );

		/* Facebook - Link */
		$wp_customize->add_setting( 'medica_lite_general_socials_link_facebook_link', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_general_socials_link_facebook_link', array(
			'label'			=> __( 'Facebook - Link:', 'medica_lite' ),
			'description'	=> __( 'Type your Facebook link.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_socials_link_facebook_link',
			'priority'		=> '1',
			'type'			=> 'url'
		) );

		/* Twitter - Link */
		$wp_customize->add_setting( 'medica_lite_general_socials_link_twitter_link', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default' 			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_general_socials_link_twitter_link', array(
			'label'			=> __( 'Twitter - Link:', 'medica_lite' ),
			'description'	=> __( 'Type your Twitter link', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_socials_link_twitter_link',
			'priority'		=> '2',
			'type'			=> 'url'
		) );

		/* YouTube - Link */
		$wp_customize->add_setting( 'medica_lite_general_socials_link_youtube_link', array(
			'sanitize_callback' => 'esc_url_raw',
			'default' 			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_general_socials_link_youtube_link', array(
			'label' 		=> __( 'YouTube - Link:', 'medica_lite' ),
			'description'	=> __( 'Type your YouTube link.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_socials_link_youtube_link',
			'priority'		=> '3',
			'type'			=> 'url'
		) );

		/* LinkedIn - Link */
		$wp_customize->add_setting( 'medica_lite_general_socials_link_linkedin_link', array(
			'sanitize_callback' => 'esc_url_raw',
			'default' 			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_general_socials_link_linkedin_link', array(
			'label'			=> __( 'LinkedIn - Link:', 'medica_lite' ),
			'description'	=> __( 'Type your LinkedIn link.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_socials_link_linkedin_link',
			'priority'		=> '4',
			'type'			=> 'url'
		) );

		/* Footer - About Us - Title */
		$wp_customize->add_setting( 'medica_lite_general_footer_aboutus_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'About Us', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_footer_aboutus_title', array(
			'label'			=> __( 'Footer - About Us - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for About Us section from footer.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_footer_aboutus_title',
			'priority'		=> '5',
			'type'			=> 'text'
		) );

		/* Footer - About Us - Image */
		$wp_customize->add_setting( 'medica_lite_general_footer_aboutus_image', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_general_footer_aboutus_image', array(
		    'label'			=> __( 'Footer - About Us - Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for About Us section from footer.', 'medica_lite' ),
		    'section'		=> 'medica_lite_general',
		    'settings'		=> 'medica_lite_general_footer_aboutus_image',
		    'priority'		=> '6'
		) ) );

		/* Footer - About Us - Entry */
		$wp_customize->add_setting( 'medica_lite_general_footer_aboutus_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi. Ut vitae porttitor ante. Etiam vel porttitor eros, id malesuada elit. Vivamus non orci erat.', 'medica_lite')
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_general_footer_aboutus_entry', array(
			'label'			=> __( 'Footer - About Us - Entry', 'medica_lite' ),
			'description'	=> __( 'Type the entry for About Us section from footer.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_footer_aboutus_entry',
			'priority'		=> '7'
	    ) ) );

	    /* Footer - Menu - Title */
		$wp_customize->add_setting( 'medica_lite_general_footer_menu_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Menu', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_footer_menu_title', array(
			'label'			=> __( 'Footer - Menu - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Menu section from footer.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_footer_menu_title',
			'priority'		=> '8',
			'type'			=> 'text'
		) );

		/* Contact - Telephone - Title */
		$wp_customize->add_setting( 'medica_lite_general_contact_telephone_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Telephone', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_contact_telephone_title', array(
			'label'			=> __( 'Contact - Telephone - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Contact section from header.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_contact_telephone_title',
			'priority'		=> '10',
			'type'			=> 'text'
		) );

		/* Contact - Telephone - Number */
		$wp_customize->add_setting( 'medica_lite_general_contact_telephone_number', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( '+1 223 456 23', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_contact_telephone_number', array(
			'label'			=> __( 'Contact - Telephone - Number:', 'medica_lite' ),
			'description'	=> __( 'Type the telephone number for Contact section from header.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_contact_telephone_number',
			'priority'		=> '11',
			'type'			=> 'text'
		) );

		/* Contact - Address - Title */
		$wp_customize->add_setting( 'medica_lite_general_contact_address_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Address', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_contact_address_title', array(
			'label'			=> __( 'Contact - Address - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Address section from footer and page contact.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_contact_address_title',
			'priority'		=> '12',
			'type'			=> 'text'
		) );

		/* Contact - Address - Entry */
		$wp_customize->add_setting( 'medica_lite_general_contact_address_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Northwest Valley<br />35th Ave. at Northern<br />7805 N 35th Ave<br />Phoenix, AZ 85051<br />', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_general_contact_address_entry', array(
			'label'			=> __( 'Contact - Address - Entry', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Address section from footer and page contact.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_contact_address_entry',
			'priority'		=> '13'
	    ) ) );

	    /* Contact - Map - Code */
		$wp_customize->add_setting( 'medica_lite_general_contact_map_code', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_callback_htmlspecialchars_decode'
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_general_contact_map_code', array(
			'label'			=> __( 'Contact - Map - Code:', 'medica_lite' ),
			'description'	=> __( 'Insert the map code. This one will appear in page template contact.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_contact_map_code',
			'priority'		=> '14'
	    ) ) );

	    /* 404 Error - Title */
		$wp_customize->add_setting( 'medica_lite_general_404error_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( '404 ERROR', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_404error_title', array(
			'label'			=> __( '404 Error - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for 404 error from 404 page.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_404error_title',
			'priority'		=> '15',
			'type'			=> 'text'
		) );

		/* 404 Error - Subtitle */
		$wp_customize->add_setting( 'medica_lite_general_404error_subtitle', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'The page does not exist', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_general_404error_subtitle', array(
			'label'			=> __( '404 Error - Subtitle:', 'medica_lite' ),
			'description'	=> __( 'Type the subtitle for 404 error from 404 page.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_404error_subtitle',
			'priority'		=> '17',
			'type'			=> 'text'
		) );

		/* 404 Error - Entry */
		$wp_customize->add_setting( 'medica_lite_general_404error_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try. Can you try this again or maybe visit our <a href="'. esc_url( home_url() ) .'" title="Home Page">Home Page</a> to start fresh. We\'ll do better next time.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_general_404error_entry', array(
			'label'			=> __( '404 Error - Entry', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Address section from footer and page contact.', 'medica_lite' ),
			'section'		=> 'medica_lite_general',
			'settings'		=> 'medica_lite_general_404error_entry',
			'priority'		=> '18'
	    ) ) );

	/**
     *	Subheader
     *
     *	This settings will apear in page template home.
     */
    $wp_customize->add_section( 'medica_lite_pagetemplatehome_subheader' , array(
    	'title'			=> __( 'Subheader', 'medica_lite' ),
    	'priority'		=> 250,
    	'description'	=> __( 'This settings will apear in page template home.', 'medica_lite' )
	) );

		/* Footer - About Us - Image */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_subheader_backgroundimage', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_pagetemplatehome_subheader_backgroundimage', array(
		    'label'			=> __( 'Background Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for Subheader section from page template home.', 'medica_lite' ),
		    'section'		=> 'medica_lite_pagetemplatehome_subheader',
		    'settings'		=> 'medica_lite_pagetemplatehome_subheader_backgroundimage',
		    'priority'		=> '1'
		) ) );

		/* Article - Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_subheader_article_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Your Awesome Headline', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_subheader_article_title', array(
			'label'			=> __( 'Article - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Subheader section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_subheader',
			'settings'		=> 'medica_lite_pagetemplatehome_subheader_article_title',
			'priority'		=> '2',
			'type'			=> 'text'
		) );

		/* Article - Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_subheader_article_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_subheader_article_entry', array(
			'label'			=> __( 'Article - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Subheader section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_subheader',
			'settings'		=> 'medica_lite_pagetemplatehome_subheader_article_entry',
			'priority'		=> '3'
	    ) ) );

	    /* Article - Button Text */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_subheader_article_buttontext', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Read More', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_subheader_article_buttontext', array(
			'label'			=> __( 'Article - Button Text:', 'medica_lite' ),
			'description'	=> __( 'Type the button text for Subheader section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_subheader',
			'settings'		=> 'medica_lite_pagetemplatehome_subheader_article_buttontext',
			'priority'		=> '4',
			'type'			=> 'text'
		) );

		/* Article - Button Link */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_subheader_article_buttonlink', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_subheader_article_buttonlink', array(
			'label'			=> __( 'Article - Button Link:', 'medica_lite' ),
			'description'	=> __( 'Type the link for button from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_subheader',
			'settings'		=> 'medica_lite_pagetemplatehome_subheader_article_buttonlink',
			'priority'		=> '5',
			'type'			=> 'url'
		) );

	/**
     *	Featured Article
     *
     *	This settings will apear in page template home.
     */
    $wp_customize->add_section( 'medica_lite_pagetemplatehome_featuredarticle' , array(
    	'title'			=> __( 'Featured Article', 'medica_lite' ),
    	'priority'		=> 300,
    	'description'	=> __( 'This settings will apear in page template home.', 'medica_lite' )
	) );

		/* Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_featuredarticle_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Feautured Article', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_featuredarticle_title', array(
			'label'			=> __( 'Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Featured Article from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_featuredarticle',
			'settings'		=> 'medica_lite_pagetemplatehome_featuredarticle_title',
			'priority'		=> '1',
			'type'			=> 'text'
		) );

		/* Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_featuredarticle_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( '<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><br /><p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p><br /><p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p><br />', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_featuredarticle_entry', array(
			'label'			=> __( 'Article - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Featured Article section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_featuredarticle',
			'settings'		=> 'medica_lite_pagetemplatehome_featuredarticle_entry',
			'priority'		=> '2'
	    ) ) );

	    /* Image */
	    $wp_customize->add_setting( 'medica_lite_pagetemplatehome_featuredarticle_image', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_pagetemplatehome_featuredarticle_image', array(
		    'label'			=> __( 'Background Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for Featured Article section from page template home.', 'medica_lite' ),
		    'section'		=> 'medica_lite_pagetemplatehome_featuredarticle',
		    'settings'		=> 'medica_lite_pagetemplatehome_featuredarticle_image',
		    'priority'		=> '3'
		) ) );

	/**
     *	Features
     *
     *	This settings will apear in page template home.
     */
    $wp_customize->add_section( 'medica_lite_pagetemplatehome_features' , array(
    	'title'			=> __( 'Features', 'medica_lite' ),
    	'priority'		=> 350,
    	'description'	=> __( 'This settings will apear in page template home.', 'medica_lite' )
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_article_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'This is a free wordpress theme', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_article_title', array(
			'label'			=> __( 'Article - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Features article from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_article_title',
			'priority'		=> '1',
			'type'			=> 'text'
		) );

		/* Article - Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_article_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_article_entry', array(
			'label'			=> __( 'Article - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Features article section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_article_entry',
			'priority'		=> '2'
	    ) ) );

	    /* Box 1 - Image */
	    $wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box1_image', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box1_image', array(
		    'label'			=> __( 'Box 1 - Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for Box 1 - Features section from page template home.', 'medica_lite' ),
		    'section'		=> 'medica_lite_pagetemplatehome_features',
		    'settings'		=> 'medica_lite_pagetemplatehome_features_box1_image',
		    'priority'		=> '3'
		) ) );

		/* Box 1 - Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box1_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Loreum', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box1_title', array(
			'label'			=> __( 'Box 1 - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Box 1 - Features from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box1_title',
			'priority'		=> '4',
			'type'			=> 'text'
		) );

		/* Box 1 - Title Link */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_article1_titlelink', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_article1_titlelink', array(
			'label'			=> __( 'Box 1 - Title Link:', 'medica_lite' ),
			'description'	=> __( 'Type the link for Box 1 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_article1_titlelink',
			'priority'		=> '5',
			'type'			=> 'url'
		) );

		/* Box 1 - Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box1_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box1_entry', array(
			'label'			=> __( 'Box 1 - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Box 1 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box1_entry',
			'priority'		=> '6'
	    ) ) );

	    /* Box 2 - Image */
	    $wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box2_image', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box2_image', array(
		    'label'			=> __( 'Box 2 - Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for Box 2 - Features section from page template home.', 'medica_lite' ),
		    'section'		=> 'medica_lite_pagetemplatehome_features',
		    'settings'		=> 'medica_lite_pagetemplatehome_features_box2_image',
		    'priority'		=> '7'
		) ) );

		/* Box 2 - Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box2_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Dolor', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box2_title', array(
			'label'			=> __( 'Box 2 - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Box 2 - Features from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box2_title',
			'priority'		=> '8',
			'type'			=> 'text'
		) );

		/* Box 2 - Title Link */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box2_titlelink', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box2_titlelink', array(
			'label'			=> __( 'Box 2 - Title Link:', 'medica_lite' ),
			'description'	=> __( 'Type the link for Box 2 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box2_titlelink',
			'priority'		=> '9',
			'type'			=> 'url'
		) );

		/* Box 2 - Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box2_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box2_entry', array(
			'label'			=> __( 'Box 2 - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Box 2 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box2_entry',
			'priority'		=> '10'
	    ) ) );

	    /* Box 3 - Image */
	    $wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box3_image', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box3_image', array(
		    'label'			=> __( 'Box 3 - Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for Box 3 - Features section from page template home.', 'medica_lite' ),
		    'section'		=> 'medica_lite_pagetemplatehome_features',
		    'settings'		=> 'medica_lite_pagetemplatehome_features_box3_image',
		    'priority'		=> '11'
		) ) );

		/* Box 3 - Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box3_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Lipsum', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box3_title', array(
			'label'			=> __( 'Box 3 - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Box 3 - Features from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box3_title',
			'priority'		=> '12',
			'type'			=> 'text'
		) );

		/* Box 3 - Title Link */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box3_titlelink', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box3_titlelink', array(
			'label'			=> __( 'Box 3 - Title Link:', 'medica_lite' ),
			'description'	=> __( 'Type the link for Box 3 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box3_titlelink',
			'priority'		=> '13',
			'type'			=> 'url'
		) );

		/* Box 3 - Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box3_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box3_entry', array(
			'label'			=> __( 'Box 3 - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Box 3 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box3_entry',
			'priority'		=> '14'
	    ) ) );

	    /* Box 4 - Image */
	    $wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box4_image', array(
			'sanitize_callback'	=> 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box4_image', array(
		    'label'			=> __( 'Box 4 - Image:', 'ti' ),
		    'description'	=> __( 'Upload the image for Box 4 - Features section from page template home.', 'medica_lite' ),
		    'section'		=> 'medica_lite_pagetemplatehome_features',
		    'settings'		=> 'medica_lite_pagetemplatehome_features_box4_image',
		    'priority'		=> '15'
		) ) );

		/* Box 4 - Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box4_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Vivamus', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box4_title', array(
			'label'			=> __( 'Box 4 - Title:', 'medica_lite' ),
			'description'	=> __( 'Type the title for Box 4 - Features from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box4_title',
			'priority'		=> '16',
			'type'			=> 'text'
		) );

		/* Box 4 - Title Link */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box4_titlelink', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_box4_titlelink', array(
			'label'			=> __( 'Box 4 - Title Link:', 'medica_lite' ),
			'description'	=> __( 'Type the link for Box 4 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box4_titlelink',
			'priority'		=> '17',
			'type'			=> 'url'
		) );

		/* Box 4 - Entry */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_box4_entry', array(
			'sanitize_callback'	=> 'medica_lite_sanitize_text',
			'default'			=>	__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.', 'medica_lite' )
		) );
	    $wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'medica_lite_pagetemplatehome_features_box4_entry', array(
			'label'			=> __( 'Box 4 - Entry:', 'medica_lite' ),
			'description'	=> __( 'Type the entry for Box 4 - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_box4_entry',
			'priority'		=> '18'
	    ) ) );

	    /* Button Text */
	    $wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_button_text', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Buy Now', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_button_text', array(
			'label'			=> __( 'Button - Text:', 'medica_lite' ),
			'description'	=> __( 'Type the text for Button - Features from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_button_text',
			'priority'		=> '19',
			'type'			=> 'text'
		) );

		/* Button - Link */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_features_button_link', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'default'			=> '#'
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_features_button_link', array(
			'label'			=> __( 'Button - Link:', 'medica_lite' ),
			'description'	=> __( 'Type the link for button - Features section from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_features',
			'settings'		=> 'medica_lite_pagetemplatehome_features_button_link',
			'priority'		=> '20',
			'type'			=> 'url'
		) );

	/**
     *	Latest News
     *
     *	This settings will apear in page template home.
     */
    $wp_customize->add_section( 'medica_lite_pagetemplatehome_latestnews' , array(
    	'title'			=> __( 'Latest News', 'medica_lite' ),
    	'priority'		=> 400,
    	'description'	=> __( 'This settings will apear in page template home.', 'medica_lite' )
	) );

    	/* Title */
		$wp_customize->add_setting( 'medica_lite_pagetemplatehome_latestnews_title', array(
			'sanitize_callback' => 'medica_lite_sanitize_text',
			'default' 			=> __( 'Latest News', 'medica_lite' )
		) );
		$wp_customize->add_control( 'medica_lite_pagetemplatehome_latestnews_title', array(
			'label'			=> __( 'Title:', 'medica_lite' ),
			'description'	=> __( 'Type the text for Button - Features from page template home.', 'medica_lite' ),
			'section'		=> 'medica_lite_pagetemplatehome_latestnews',
			'settings'		=> 'medica_lite_pagetemplatehome_latestnews_title',
			'priority'		=> '1',
			'type'			=> 'text'
		) );

}
add_action( 'customize_register', 'medica_lite_customizer' );

/**
 *	Active Callback
 */
function active_callback( $active, $control ) {

	// Subheader
    if ( 'medica_lite_pagetemplatehome_subheader' === $control->section ) {
        $active = is_home();
    }

    // Featured Article
    if ( 'medica_lite_pagetemplatehome_featuredarticle' === $control->section ) {
        $active = is_home();
    }

    // Features
    if ( 'medica_lite_pagetemplatehome_features' === $control->section ) {
        $active = is_home();
    }

    // Latest News
    if ( 'medica_lite_pagetemplatehome_latestnews' === $control->section ) {
        $active = is_home();
    }

    return $active;

}
add_filter( 'customize_control_active', 'active_callback', 10, 2 );

/**
 *	Registers
 */
function medica_lite_registers() {
	wp_register_script( 'medica_lite_customizer_script', get_template_directory_uri() . '/js/medica_lite_customizer.js', array("jquery"), '20120206', true  );
	wp_enqueue_script( 'medica_lite_customizer_script' );
	wp_localize_script( 'medica_lite_customizer_script', 'medica_lite_buttons', array(
		'doc'			=> __( 'Documentation', 'medica_lite' ),
		'pro'			=> __( 'View PRO Version', 'medica_lite' ),
		'team'			=> '<span class="sidebar-content-title">'. __( 'Our Team Section', 'medica_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'medica_lite' ) .'</span>',
		'testimonials'	=> '<span class="sidebar-content-title">'. __( 'Testimonials Section', 'medica_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'medica_lite' ) .'</span>'
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'medica_lite_registers' );
?>