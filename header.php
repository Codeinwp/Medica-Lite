<?php
/**
 *  The template for displaying Header.
 *
 *  @package ThemeIsle.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wide-header">
				<div class="wrapper cf">
					<div id="header-top" class="cf">
						<div class="header-left cf">
							<a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
								<?php
								if ( get_header_image() != NULL ) {
									echo '<img src="'. get_header_image() .'" width="'. get_custom_header()->width .'" height="'. get_custom_header()->height .'" title="'. get_bloginfo( 'name' ) .'" alt="'. get_bloginfo( 'name' ) .'" />';
								} else {
									echo '<div class="logo-title">';
									echo get_bloginfo( 'name' );
									echo '</div><!--/.logo-title-->';
									echo '<div class="logo-description">';
									echo get_bloginfo( 'description' );
									echo '</div>';
								}
								?>
							</a><!--/a .logo-->
							<div class="header-contact">
								<?php
								if ( get_theme_mod( 'ti_telephone_title' ) ) {
									echo get_theme_mod( 'ti_telephone_title' ) . '<br />';
								} else {
									echo '<br />';
								}

								if ( get_theme_mod( 'ti_telephone_number' ) ) {
									echo '<a href="tel:'. get_theme_mod( 'ti_telephone_number' ) .'"><i class="icon-phone"></i> '. get_theme_mod( 'ti_telephone_number' ) .'</a>';
								} else {
									echo '<div style="margin-top: 24px;"></div>';
								}
								?>
								<ul class="cf">
									<?php
									if ( get_theme_mod( 'ti_social_icons_linkedin_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_linkedin_link' ) .'" title="LinkedIn" class="icon" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'ti_social_icons_youtube_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_youtube_link' ) .'" title="YouTube" class="icon" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'ti_social_icons_twitter_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_twitter_link' ) .'" title="Twitter" class="icon" target="_blank"></a></li>';
									}

									if ( get_theme_mod( 'ti_social_icons_facebook_link' ) ) {
										echo '<li><a href="'. get_theme_mod( 'ti_social_icons_facebook_link' ) .'" title="Facebook" class="icon" target="_blank"></a></li>';
									}
									?>
								</ul>
							</div><!--/div .header-contact-->
						</div><!--/div .header-left-->
					</div><!--/div #header-top-->
					<nav class="navigation">
						<div class="openresponsivemenu">
						</div><!--/.openresponsivemenu-->
						<div class="navigation-menu">
							<?php
							wp_nav_menu( array(
									'theme_location'	=> 'header-navigation',
									'container'			=> '',
									'container_class'	=> ''
								)
							);
							?>
						</div><!--/.navigation-menu-->
						</div>
					</nav><!--/.navigation-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-header-->

			<?php
			if ( is_front_page() ) {

				if ( get_theme_mod( 'ti_subheader_background_image' ) ) {
					$subheader_background_image = get_theme_mod( 'ti_subheader_background_image' );
				} else {
					$subheader_background_image = get_template_directory_uri() . '/images/full-header.jpg';
				}

				?>

				<div id="subheader" style="background-image: url(<?php echo $subheader_background_image; ?>);">
					<?php
					if ( get_theme_mod( 'ti_subheader_article_title' ) || get_theme_mod( 'ti_subheader_article_content' ) || get_theme_mod( 'ti_subheader_article_button_text' ) ) { ?>

						<div class="subheader-color cf">
							<div class="wrapper wrapper-position-relative cf">
								<div class="full-header-content">
									<?php
									if ( get_theme_mod( 'ti_subheader_article_title' ) ) {
										echo '<h3>'. get_theme_mod( 'ti_subheader_article_title' ) .'</h3>';
									}

									if ( get_theme_mod( 'ti_subheader_article_content' ) ) {
										echo '<p>'. get_theme_mod( 'ti_subheader_article_content' ) .'</p>';
									}

									if ( get_theme_mod( 'ti_subheader_article_button_text' ) ) {
										echo '<a href="'. get_theme_mod( 'ti_subheader_article_button_link' ) .'" title="'. get_theme_mod( 'ti_subheader_article_button_text' ) .'" id="read-more">'.  get_theme_mod( 'ti_subheader_article_button_text' ) .'</a>';
									}
									?>
								</div><!--/div .header-content-->
							</div><!--/div .wrapper-->
						</div><!--/div .full-header-color-->

					<?php }
					?>
					<?php
					if ( get_theme_mod( 'ti_frontpage_article_image' ) || get_theme_mod( 'ti_frontpage_article_title' ) || get_theme_mod( 'ti_frontpage_article_content' ) ) { ?>

						<div class="second-subheader">
							<div class="wrapper">

								<?php
								if ( get_theme_mod( 'ti_frontpage_article_image' ) ) {
									echo '<div class="second-subheader-image">';
									echo '<img src="'. get_theme_mod( 'ti_frontpage_article_image' ) .'" alt="'. get_bloginfo( 'title' ) .'" title="'. get_bloginfo( 'title' ) .'" />';
									echo '</div><!--/.second-subheader-image-->';
								}
								?>

								<?php if ( get_theme_mod( 'ti_frontpage_article_image' ) == NULL ) {
									$category_columns_class = 'class="no-subheader-image"';
								} else {
									$category_columns_class = '';
								}
								?>
								<div id="category-columns" <?php echo $category_columns_class; ?>>
									<?php
									if ( get_theme_mod( 'ti_frontpage_article_title' ) ) {
										echo '<h3>'. get_theme_mod( 'ti_frontpage_article_title' ) .'</h3>';
									}

									if ( get_theme_mod( 'ti_frontpage_article_content' ) ) {
										echo '<p>'. get_theme_mod( 'ti_frontpage_article_content' ) .'</p>';
									}
									?>
								</div><!-- /div #category-columns -->



							</div><!--/div .wrapper-->
						</div><!--/div .second-subheader-->

					<?php }
					?>

				</div><!--/div #subheader-->

			<?php }
			?>