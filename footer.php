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
				if ( get_theme_mod( 'medica_lite_general_footer_aboutus_title' ) || get_theme_mod( 'medica_lite_general_footer_aboutus_image' ) || get_theme_mod( 'medica_lite_footer_aboutus_content' ) ) { ?>

					<div class="footer-box">
						<?php
						if ( get_theme_mod( 'medica_lite_general_footer_aboutus_title', 'About Us' ) ) {
							echo '<div class="footer-box-title">'. esc_attr( get_theme_mod( 'medica_lite_general_footer_aboutus_title', 'About Us' ) ) .'</div>';
						}
						?>
						<div class="footer-box-entry">
							<?php
							if ( get_theme_mod( 'medica_lite_general_footer_aboutus_image' ) ) {
								echo '<img src="'. esc_url( get_theme_mod( 'medica_lite_general_footer_aboutus_image' ) ) .'" class="cf" alt="'. get_theme_mod( 'medica_lite_general_footer_aboutus_title', 'About Us' ) .'">';
							}
							?>
							<div class="cf"></div>
							<?php echo esc_textarea( get_theme_mod( 'medica_lite_general_footer_aboutus_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi. Ut vitae porttitor ante. Etiam vel porttitor eros, id malesuada elit. Vivamus non orci erat.' ) ); ?>
						</div><!--/div .footer-box-entry-->

					</div><!--/div .footer-box-->

				<?php }
				?>

				<div class="footer-box">
					<?php
					if ( get_theme_mod( 'medica_lite_general_footer_menu_title', 'Menu' ) ) {
						echo '<div class="footer-box-title">'. get_theme_mod( 'medica_lite_general_footer_menu_title', 'Menu' ) .'</div>';
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
					if ( get_theme_mod( 'medica_lite_general_contact_address_title', 'Address' ) ) {
						echo '<div class="footer-box-title">'. get_theme_mod( 'medica_lite_general_contact_address_title', 'Address' ) .'</div>';
					}
					?>
					<div class="footer-box-entry">
						<?php
						if ( get_theme_mod( 'medica_lite_general_contact_address_entry', 'Northwest Valley<br />35th Ave. at Northern<br />7805 N 35th Ave<br />Phoenix, AZ 85051<br />' ) ) {
							echo '<span>'. get_theme_mod( 'medica_lite_general_contact_address_entry', 'Northwest Valley<br />35th Ave. at Northern<br />7805 N 35th Ave<br />Phoenix, AZ 85051<br />' ) .'</span>';
						}
						?>
						<div class="header-contact">
								<?php
								if ( get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) ) {
									echo '<a href="tel:'. get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) .'"><i class="icon-phone"></i> '. get_theme_mod( 'medica_lite_general_contact_telephone_number', '+1 223 456 23' ) .'</a>';
								}
								?>
								<ul class="cf">
									<?php
									if ( get_theme_mod( 'medica_lite_general_socials_link_facebook_link', '#' ) ) {
										echo '<li class="footer-facebook-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_facebook_link', '#' ) ) .'" title="'. __( 'Facebook', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socials_link_twitter_link', '#' ) ) {
										echo '<li class="footer-twitter-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_twitter_link', '#' ) ) .'" title="'. __( 'Twitter', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socials_link_youtube_link', '#' ) ) {
										echo '<li class="footer-youtube-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_youtube_link', '#' ) ) .'" title="'. __( 'YouTube', 'medica_lite' ) .'" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'medica_lite_general_socials_link_linkedin_link', '#' ) ) {
										echo '<li class="footer-linkedin-icon"><a href="'. esc_url( get_theme_mod( 'medica_lite_general_socials_link_linkedin_link', '#' ) ) .'" title="'. __( 'LinkedIn', 'medica_lite' ) .'" target="_blank"></a></li>';
									}
									?>
								</ul>
						</div><!--/div .header-contact-->
					</div>
				</div><!--/div .footer-box-->
			</div><!--/div .wrapper-->
			<div class="copyright-name">
				<div class="wrapper">
					<?php _e( 'Copyright &copy;', 'medica_lite' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a> <?php _e( '| Proudly powered by', 'medica_lite' ); ?> <a href="http://www.wordpress.org" title="<?php _e( 'WordPress', 'medica_lite' ); ?>" target="_Blank"><?php _e( 'WordPress', 'medica_lite' ); ?></a>.
				</div><!--/div .wrapper-->
			</div><!-- /div .copyright-name -->
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>
</html>