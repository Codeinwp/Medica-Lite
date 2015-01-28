		<?php
		/**
		 *  The template for displaying Single.
		 *
		 *  @package ThemeIsle.
		 */
		get_header();
		?>
			<div class="wide-nav">
				<div class="wrapper">
					<h3>
						<?php
						if ( get_theme_mod( 'medica_lite_general_404error_title', '404 ERROR' ) ) {
							echo esc_attr( get_theme_mod( 'medica_lite_general_404error_title', '404 ERROR' ) );
						}
						?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-nav-->
		</header><!--/header-->
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<div class="post">
						<h3 class="post-title">
							<?php
							if ( get_theme_mod( 'medica_lite_general_404error_subtitle', 'The page does not exist' ) ) {
								echo esc_attr( get_theme_mod( 'medica_lite_general_404error_subtitle', 'The page does not exist' ) );
							}
							?>
						</h3><!--/h3 .post-title-->
						<div class="post-excerpt">
							<?php
							if ( get_theme_mod( 'medica_lite_general_404error_entry', 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try. Can you try this again or maybe visit our <a href="'. esc_url( home_url() ) .'" title="Home Page">Home Page</a> to start fresh. We\'ll do better next time.' ) ) {
								echo get_theme_mod( 'medica_lite_general_404error_entry', 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try. Can you try this again or maybe visit our <a href="'. esc_url( home_url() ) .'" title="Home Page">Home Page</a> to start fresh. We\'ll do better next time.' );
							}
							?>
						</div><!--/div .post-excerpt-->
					</div><!--/div .post-->
				</div><!--/div #posts-->
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>