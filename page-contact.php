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
			  		if ( get_theme_mod( 'ti_contactpage_map_code' ) ) { ?>

			  			<div id="map-city">
			  				<?php echo get_theme_mod( 'ti_contactpage_map_code' ); ?>
			  			</div><!--/#map-city-->

			  			<?php
				  		if ( get_theme_mod( 'ti_contact_address_title' ) || get_theme_mod( 'ti_contact_address_content' ) || get_theme_mod( 'ti_telephone_number' ) ) { ?>

				  			<div id="contact-information" class="cf">
					  			<?php
					  			if ( get_theme_mod( 'ti_contact_address_title' ) ) {
					  				echo '<div class="title">'. get_theme_mod( 'ti_contact_address_title' ) .'</div>';
					  			}

					  			if ( get_theme_mod( 'ti_contact_address_content' ) ) {
					  				echo '<span>'. get_theme_mod( 'ti_contact_address_content' ) .'</span>';
					  			}

					  			if ( get_theme_mod( 'ti_telephone_number' ) ) {
									echo '<a href="tel:'. get_theme_mod( 'ti_telephone_number' ) .'"><i class="icon-phone"></i> '. get_theme_mod( 'ti_telephone_number' ) .'</a>';
								}
					  			?>
								<ul class="cf">
									<?php
									if ( get_theme_mod( 'ti_social_icons_facebook_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_facebook_link' ) .'" title="LinkedIn" class="icon" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'ti_social_icons_twitter_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_twitter_link' ) .'" title="YouTube" class="icon" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'ti_social_icons_youtube_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_youtube_link' ) .'" title="Twitter" class="icon" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'ti_social_icons_linkedin_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_linkedin_link' ) .'" title="Facebook" class="icon" target="_blank"></a></li>';
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
						_e( 'No posts found', 'ti' );
					}
			  	?>
			  	</div> <!-- /div #contact-content -->
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>