		<?php
		/**
		 *	Template name: Home
		 *
		 *  The template for displaying Front Page.
		 *
		 *  @package ThemeIsle.
		 */
		get_header();

		if ( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_backgroundimage' ) ) {
			$subheader_background_image = 'background-image: url('. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_backgroundimage' ) ) .');';
		} else {
			$subheader_background_image = '';
		}
		?>

		<div id="subheader" style="<?php echo $subheader_background_image; ?>">
			<?php
			if ( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_title', 'Your Awesome Headline' ) || get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_entry', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.' ) || get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_buttontext', 'Read More' ) ) { ?>

				<div class="subheader-color cf">
					<div class="wrapper wrapper-position-relative cf">
						<div class="full-header-content">
							<?php
							if ( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_title', 'Your Awesome Headline' ) ) {
								echo '<h3>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_title', 'Your Awesome Headline' ) ) .'</h3>';
							}

							if ( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_entry', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.' ) ) {
								echo '<p>'. esc_textarea( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_entry', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.' ) ) .'</p>';
							}

							if ( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_buttontext', 'Read More' ) ) {
								echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_buttonlink' ) ) .'" title="'. get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_buttontext', 'Read More' ) .'" id="read-more">'.  get_theme_mod( 'medica_lite_pagetemplatehome_subheader_article_buttontext', 'Read More' ) .'</a>';
							}
							?>
						</div><!--/div .header-content-->
					</div><!--/div .wrapper-->
				</div><!--/div .full-header-color-->

			<?php }
			?>
			<?php
			if ( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_title', 'Featured Article' ) || get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_entry', '<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><br /><p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p><br /><p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p><br />' ) ) { ?>

				<div class="second-subheader">
					<div class="wrapper">

						<?php
						if ( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_image' ) ) {
							echo '<div class="second-subheader-image">';
							echo '<img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_image' ) ) .'" alt="'. get_bloginfo( 'title' ) .'" title="'. get_bloginfo( 'title' ) .'" />';
							echo '</div><!--/.second-subheader-image-->';
						}
						?>

						<?php if ( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_image' ) == NULL ) {
							$category_columns_class = 'class="no-subheader-image"';
						} else {
							$category_columns_class = '';
						}
						?>
						<div id="category-columns" <?php echo $category_columns_class; ?>>
							<?php
							if ( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_title', 'Featured Article' ) ) {
								echo '<h3>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_title', 'Featured Article' ) ) .'</h3>';
							}

							if ( get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_entry', '<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><br /><p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p><br /><p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p><br />' ) ) {
								echo '<p>'. get_theme_mod( 'medica_lite_pagetemplatehome_featuredarticle_entry', '<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><br /><p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p><br /><p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p><br />' ) .'</p>';
							}
							?>
						</div><!-- /div #category-columns -->

					</div><!--/div .wrapper-->
				</div><!--/div .second-subheader-->

			<?php }
			?>

		</div><!--/div #subheader-->

		<?php
		if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_article_title', 'This is a free wordpress theme' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_article_entry', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_button_text', 'Buy Now' ) ) { ?>

			<section id="features" class="cf">
				<div class="wrapper cf">
					<?php
					if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_article_title', 'This is a free wordpress theme' ) ) {
						echo '<h3>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_article_title', 'This is a free wordpress theme' ) ) .'</h3>';
					}

					if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_article_entry', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.' ) ) {
						echo '<p>'. esc_textarea( get_theme_mod( 'medica_lite_pagetemplatehome_features_article_entry', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.' ) ) .'</p>';
					}
					?>
					<ul class="cf">
						<?php
						if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_image' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_article1_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_article1_titlelink', '#' ) ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) .'"><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) .'" /></a>';
										} else {
											echo '<i><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_article1_titlelink', '#' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_pagetemplatehome_features_article1_titlelink', '#' ) .'" class="heart"></a>';
										} else {
											echo '<i class="heart"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_article1_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_article1_titlelink', '#' )  ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) .'">'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) .'</a>';
										} else {
											echo '<span>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_title', 'Loreum' ) ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) {
										echo '<p>'. get_theme_mod( 'medica_lite_pagetemplatehome_features_box1_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }

						if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_image' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_titlelink', '#' ) ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) ) .'"><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) ) .'" /></a>';
										} else {
											echo '<i><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_titlelink', '#' ) ) .'" class="medic"></a>';
										} else {
											echo '<i class="medic"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_titlelink', '#' ) ) .'" title="'. get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) .'">'. get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) .'</a>';
										} else {
											echo '<span>'. get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_title', 'Dolor' ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) {
										echo '<p>'. esc_textarea( get_theme_mod( 'medica_lite_pagetemplatehome_features_box2_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }

						if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_image' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_titlelink' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_titlelink' ) ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) .'"><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) .'" /></a>';
										} else {
											echo '<i><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_titlelink' ) ) {
											echo '<a href="'. esc_url( esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_titlelink' ) ) ) .'" class="stethoscope"></a>';
										} else {
											echo '<i class="stethoscope"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_titlelink' ) ) {
											echo '<a href="'. get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_titlelink' ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) .'">'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) .'</a>';
										} else {
											echo '<span>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_title', 'Lipsum' ) ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) {
										echo '<p>'. esc_textarea( get_theme_mod( 'medica_lite_pagetemplatehome_features_box3_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) .'</p>';
									} else {
										echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'medica_lite' ) .'</p>';
									}
									?>
								</div><!-- /div .info-div -->
							</li>

						<?php }

						if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_image' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) || get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) { ?>

							<li class="cf">
								<div class="icon-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_image' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_titlelink', '#' ) ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) .'"><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) .'" /></a>';
										} else {
											echo '<i><img src="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_image' ) ) .'" alt="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) .'" /></i>';
										}

									} else {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_titlelink', '#' ) ) .'" class="doctor"></a>';
										} else {
											echo '<i class="doctor"></i>';
										}

									}
									?>
								</div> <!-- s/div .icon-div -->
								<div class="info-div">
									<?php
									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) {

										if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_titlelink', '#' ) ) {
											echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_titlelink', '#' ) ) .'" title="'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) .'">'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) .'</a>';
										} else {
											echo '<span>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_title', 'Vivamus' ) ) .'</span>';
										}

									}

									if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) {
										echo '<p>'. esc_textarea( get_theme_mod( 'medica_lite_pagetemplatehome_features_box4_entry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus, mauris nec consectetur interdum, sapien lacus ultricies felis, id iaculis est urna et mi.' ) ) .'</p>';
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
					if ( get_theme_mod( 'medica_lite_pagetemplatehome_features_button_text', 'Buy Now' ) ) {
						echo '<a href="'. esc_url( get_theme_mod( 'medica_lite_pagetemplatehome_features_button_link', '#' ) ) .'" title="'. get_theme_mod( 'medica_lite_pagetemplatehome_features_button_text', 'Buy Now' ) .'" id="view-more">'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_features_button_text', 'Buy Now' ) ) .'</a>';
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
					if ( get_theme_mod( 'medica_lite_pagetemplatehome_latestnews_title', 'Latest News' ) ) {
						echo '<h3>'. esc_attr( get_theme_mod( 'medica_lite_pagetemplatehome_latestnews_title', 'Latest News' ) ) .'</h3>';
					}

					$args = array (
						'post_type'	=> 'post',
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