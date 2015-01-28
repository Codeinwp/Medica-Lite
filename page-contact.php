			<?php
			/**
			 *  The template for displaying Page Contact.
			 *
			 *  @package ThemeIsle.
			 *
			 *	Template Name: Contact
			 */
			get_header();
			?>
			<div class="wide-nav">
				<div class="wrapper">
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-nav-->
		</header><!--/header-->
		<section id="content">
			<div class="wrapper cf">
			  	<div id="contact-content" class="cf">

			  		<?php
			  		if ( get_theme_mod( 'medica_lite_general_contact_map_code' ) ) { ?>

			  			<div id="map-city">
			  				<?php echo get_theme_mod( 'medica_lite_general_contact_map_code' ); ?>
			  			</div><!--/#map-city-->

			  			<?php
				  		if ( get_theme_mod( 'medica_lite_general_contact_address_title', 'Address' ) || get_theme_mod( 'medica_lite_general_contact_address_entry', 'Northwest Valley<br />35th Ave. at Northern<br />7805 N 35th Ave<br />Phoenix, AZ 85051<br />' ) || get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) ) { ?>

				  			<div id="contact-information" class="cf">
					  			<?php
					  			if ( get_theme_mod( 'medica_lite_general_contact_address_title', 'Address' ) ) {
					  				echo '<div class="title">'. esc_attr( get_theme_mod( 'medica_lite_general_contact_address_title', 'Address' ) ) .'</div>';
					  			}

					  			if ( get_theme_mod( 'medica_lite_general_contact_address_entry', 'Northwest Valley<br />35th Ave. at Northern<br />7805 N 35th Ave<br />Phoenix, AZ 85051<br />' ) ) {
					  				echo '<span>'. get_theme_mod( 'medica_lite_general_contact_address_entry', 'Northwest Valley<br />35th Ave. at Northern<br />7805 N 35th Ave<br />Phoenix, AZ 85051<br />' ) .'</span>';
					  			}

					  			if ( get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) ) {
									echo '<a href="tel:'. get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) .'"><i class="icon-phone"></i> '. get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) .'</a>';
								}
					  			?>
								<ul class="cf">
									<?php
									if ( get_theme_mod( 'medica_lite_general_socials_link_facebook_link', '#' ) ) {
										echo '<li class="contact-facebook-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_facebook_link', '#' ) ) .'" title="'. __( 'Facebook', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socials_link_twitter_link', '#' ) ) {
										echo '<li class="contact-twitter-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_twitter_link', '#' ) ) .'" title="'. __( 'Twitter', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socials_link_youtube_link', '#' ) ) {
										echo '<li class="contact-youtube-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_youtube_link', '#' ) ) .'" title="'. __( 'YouTube', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socials_link_linkedin_link', '#' ) ) {
										echo '<li class="contact-linkedin-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_linkedin_link', '#' ) ) .'" title="'. __( 'LinkedIn', 'medica_lite' ) .'" target="_blank"></a></li>';
									}
									?>
								</ul>
					  		</div> <!-- /div contact-information -->

				  		<?php }

			  		}
			  		?>
			  	<div class="cf"></div>
			  	<?php
			  	if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); ?>

							<div class="contact-content">
								<?php the_content(); ?>
							</div><!--/.contact-content-->

							<?php }
					} else {
						_e( 'No posts found', 'medica_lite' );
					}
			  	?>
			  	</div> <!-- /div #contact-content -->
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>