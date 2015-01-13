		<?php
		/**
		 *  The template for displaying Front Page.
		 *
		 *  @package ThemeIsle.
		 */
		get_header();

		if ( get_theme_mod( 'medica_lite_features_article_title' ) || get_theme_mod( 'medica_lite_features_article_content' ) || get_theme_mod( 'medica_lite_features_box1_image' ) || get_theme_mod( 'medica_lite_features_box1_title' ) || get_theme_mod( 'medica_lite_features_box1_content' ) || get_theme_mod( 'medica_lite_features_box2_image' ) || get_theme_mod( 'medica_lite_features_box2_title' ) || get_theme_mod( 'medica_lite_features_box2_content' ) || get_theme_mod( 'medica_lite_features_box3_image' ) || get_theme_mod( 'medica_lite_features_box3_title' ) || get_theme_mod( 'medica_lite_features_box3_content' ) || get_theme_mod( 'medica_lite_features_box4_image' ) || get_theme_mod( 'medica_lite_features_box4_title' ) || get_theme_mod( 'medica_lite_features_box4_content' ) || get_theme_mod( 'medica_lite_features_box4_button_text' ) ) { ?>

			<section id="features" class="cf">
				<div class="wrapper cf">
					<?php
					if ( get_theme_mod( 'medica_lite_features_article_title' ) ) {
						echo '<h3>'. get_theme_mod( 'medica_lite_features_article_title' ) .'</h3>';
					}

					if ( get_theme_mod( 'medica_lite_features_article_content' ) ) {
						echo '<p>'. get_theme_mod( 'medica_lite_features_article_content' ) .'</p>';
					}
					?>
					<ul class="cf">
						<?php
						if ( get_theme_mod( 'medica_lite_features_box1_image' ) || get_theme_mod( 'medica_lite_features_box1_title' ) || get_theme_mod( 'medica_lite_features_box1_content' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box1_image' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box1_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box1_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box1_title' ) .'"><img src="'. get_theme_mod( 'medica_lite_features_box1_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box1_title' ) .'" /></a>';
										} else {
											echo '<i><img src="'. get_theme_mod( 'medica_lite_features_box1_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box1_title' ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_features_box1_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box1_titlelink' ) .'" class="heart"></a>';
										} else {
											echo '<i class="heart"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box1_title' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box1_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box1_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box1_title' ) .'">'. get_theme_mod( 'medica_lite_features_box1_title' ) .'</a>';
										} else {
											echo '<span>'. get_theme_mod( 'medica_lite_features_box1_title' ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_features_box1_content' ) ) {
										echo '<p>'. get_theme_mod( 'medica_lite_features_box1_content' ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }

						if ( get_theme_mod( 'medica_lite_features_box2_image' ) || get_theme_mod( 'medica_lite_features_box2_title' ) || get_theme_mod( 'medica_lite_features_box2_content' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box2_image' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box2_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box2_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box2_title' ) .'"><img src="'. get_theme_mod( 'medica_lite_features_box2_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box2_title' ) .'" /></a>';
										} else {
											echo '<i><img src="'. get_theme_mod( 'medica_lite_features_box2_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box2_title' ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_features_box2_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box2_titlelink' ) .'" class="medic"></a>';
										} else {
											echo '<i class="medic"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box2_title' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box2_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box2_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box2_title' ) .'">'. get_theme_mod( 'medica_lite_features_box2_title' ) .'</a>';
										} else {
											echo '<span>'. get_theme_mod( 'medica_lite_features_box2_title' ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_features_box2_content' ) ) {
										echo '<p>'. get_theme_mod( 'medica_lite_features_box2_content' ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }

						if ( get_theme_mod( 'medica_lite_features_box3_image' ) || get_theme_mod( 'medica_lite_features_box3_title' ) || get_theme_mod( 'medica_lite_features_box3_content' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box3_image' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box3_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box3_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box3_title' ) .'"><img src="'. get_theme_mod( 'medica_lite_features_box3_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box3_title' ) .'" /></a>';
										} else {
											echo '<i><img src="'. get_theme_mod( 'medica_lite_features_box3_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box3_title' ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_features_box3_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box3_titlelink' ) .'" class="stethoscope"></a>';
										} else {
											echo '<i class="stethoscope"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box3_title' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box3_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box3_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box3_title' ) .'">'. get_theme_mod( 'medica_lite_features_box3_title' ) .'</a>';
										} else {
											echo '<span>'. get_theme_mod( 'medica_lite_features_box3_title' ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_features_box3_content' ) ) {
										echo '<p>'. get_theme_mod( 'medica_lite_features_box3_content' ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }

						if ( get_theme_mod( 'medica_lite_features_box4_image' ) || get_theme_mod( 'medica_lite_features_box4_title' ) || get_theme_mod( 'medica_lite_features_box4_content' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box4_image' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box4_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box4_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box4_title' ) .'"><img src="'. get_theme_mod( 'medica_lite_features_box4_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box4_title' ) .'" /></a>';
										} else {
											echo '<i><img src="'. get_theme_mod( 'medica_lite_features_box4_image' ) .'" alt="'. get_theme_mod( 'medica_lite_features_box4_title' ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_features_box4_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box4_titlelink' ) .'" class="doctor"></a>';
										} else {
											echo '<i class="doctor"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_features_box4_title' ) ) {

										if ( get_theme_mod( 'medica_lite_features_box4_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_features_box4_titlelink' ) .'" title="'. get_theme_mod( 'medica_lite_features_box4_title' ) .'">'. get_theme_mod( 'medica_lite_features_box4_title' ) .'</a>';
										} else {
											echo '<span>'. get_theme_mod( 'medica_lite_features_box4_title' ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_features_box4_content' ) ) {
										echo '<p>'. get_theme_mod( 'medica_lite_features_box4_content' ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }
						?>
					</ul> <!-- /ul -->
					<?php
					if ( get_theme_mod( 'medica_lite_features_box4_button_text' ) ) {
						echo '<a href="'. get_theme_mod( 'medica_lite_features_box4_button_link' ) .'" id="view-more">'. get_theme_mod( 'medica_lite_features_box4_button_text' ) .'</a>';
					}
					?>

				</div><!--/div .wrapper-->
			</section><!--/section #features-->

		<?php }
		?>
		<section id="content">
			<div class="wrapper cf">
				<div id="latest-news">
					<?php
					if ( get_theme_mod( 'medica_lite_features_latestnews_title' ) ) {
						echo '<h3>'. get_theme_mod( 'medica_lite_features_latestnews_title' ) .'</h3>';
					}

					$args = array (
						'post_type'				=> 'post',
					);

					$wp_query = new WP_Query( $args );

					if ( $wp_query->have_posts() ) {
						while ( $wp_query->have_posts() ) {
							$wp_query->the_post();
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'news cf' ); ?>>

								<?php
								if ( $featured_image ) { ?>

									<div class="img-div">
										<div class="news-image" style="background-image: url(<?php echo $featured_image[0]; ?>);">
										</div> <!-- /div .news-image -->
										<div class="link-img-news">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
										</div> <!-- /div link-img-news -->
									</div> <!-- /div img-div -->

								<?php }
								?>

								<div class="info-news">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<span><?php echo get_the_date(); ?></span>
									<p><?php echo excerpt_limit(25); ?></p>
								</div><!-- /div info-news -->
							</div><!-- /div .news -->

							<?php }
					} else {
						_e( 'No posts found', 'medica_lite' );
					}

					wp_reset_postdata();
					?>

				</div><!-- /div latest-news -->
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
	<?php get_footer();
	?>