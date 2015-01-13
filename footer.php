		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package ThemeIsle.
		 */
		?>
		<footer id="footer">
			<div class="wrapper cf">

				<?php
				if ( get_theme_mod( 'ti_contact_aboutus_title' ) || get_theme_mod( 'ti_footer_aboutus_image' ) || get_theme_mod( 'ti_footer_aboutus_content' ) ) { ?>

					<div class="footer-box">
						<?php
						if ( get_theme_mod( 'ti_contact_aboutus_title' ) ) {
							echo '<div class="footer-box-title">'. get_theme_mod( 'ti_contact_aboutus_title' ) .'</div>';
						}
						?>
						<div class="footer-box-entry">
							<?php
							if ( get_theme_mod( 'ti_footer_aboutus_image' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_footer_aboutus_image' ) .'" class="cf" alt="'. get_theme_mod( 'ti_contact_aboutus_title' ) .'">';
							}
							?>
							<div class="cf"></div>
							<?php
							if ( get_theme_mod( 'ti_footer_aboutus_content' ) ) {
								echo get_theme_mod( 'ti_footer_aboutus_content' );
							}
							?>
						</div><!--/div .footer-box-entry-->

					</div><!--/div .footer-box-->

				<?php }
				?>

				<div class="footer-box">
					<?php
					if ( get_theme_mod( 'ti_contact_menu_title' ) ) {
						echo '<div class="footer-box-title">'. get_theme_mod( 'ti_contact_menu_title' ) .'</div>';
					}
					?>
					<div class="footer-box-entry">
							<?php
							if ( has_nav_menu( 'footer-navigation' ) ) {

								wp_nav_menu( array(
										'theme_location'	=> 'footer-navigation',
										'menu_id'			=> 'menu-footer'
									)
								);

							} else {

								echo '<ul id="menu-footer">';
								echo '<li><a href="'. home_url() .'" title="'. __( 'Home', 'medica_lite' ) .'">'. __( 'Home', 'medica_lite' ) .'</a></li>';
								wp_list_pages( array(
										'title_li'	=> '',
									)
								);
								echo '</ul>';

							}
							?>
					</div><!--/div .footer-box-entry-->
				</div><!--/div .footer-box-->
				<div class="footer-box">
					<?php
					if ( get_theme_mod( 'ti_contact_address_title' ) ) {
						echo '<div class="footer-box-title">'. get_theme_mod( 'ti_contact_address_title' ) .'</div>';
					}
					?>
					<div class="footer-box-entry">
						<?php
						if ( get_theme_mod( 'ti_contact_address_content' ) ) {
							echo '<span>'. get_theme_mod( 'ti_contact_address_content' ) .'</span>';
						}
						?>
						<div class="header-contact">
								<?php
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
						</div><!--/div .header-contact-->
					</div>
				</div><!--/div .footer-box-->
			</div><!--/div .wrapper-->
			<div class="copyright-name">
				<div class="wrapper">
					<?php _e( 'Copyright &copy;', 'medica_lite' ); ?> <a href="<?php echo home_url(); ?>" title="<?php _e( 'Medica Lite', 'medica_lite' ); ?>"><?php _e( 'Medica Lite', 'medica_lite' ); ?></a> <?php _e( 'is proudly powered by', 'medica_lite' ); ?> <a href="" title="<?php _e( 'WordPress', 'medica_lite' ); ?>"><?php _e( 'WordPress', 'medica_lite' ); ?></a>.
				</div><!--/div .wrapper-->
			</div><!-- /div .copyright-name -->
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>
</html>