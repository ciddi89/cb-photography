<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div id="page-container">
	<div id="wrapper">
		
		<div id="page" class="site content">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cb-photography' ); ?></a>


				<header id="masthead" class="">

					<nav class="navbar navbar-expand-md navbar-light" role="navigation">
  						<div class="container">
      							<!-- Brand and toggle get grouped for better mobile display -->
  								<?php if( has_custom_logo()) {
								the_custom_logo();
		 						} else { ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php $cb_photography_description = get_bloginfo( 'description', 'display' );
								if ( $cb_photography_description || is_customize_preview() ) :?>
								<p class="site-description"><?php echo $cb_photography_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
								<?php endif; } ?>
									<div class="menu-btn" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
										<div class="menu-btn__burger"></div>
											
        							</div>
        
        								<div class="collapse navbar-collapse" id="main-menu">
            								<?php
            								wp_nav_menu(array(
            								    'theme_location' => 'menu-1',
            								    'container' => false,
            								    'menu_class' => '',
            								    'fallback_cb' => '__return_false',
            								    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            								    'depth' => 2,
            								    'walker' => new bootstrap_5_wp_nav_menu_walker()
            								));
            								?>
		
												<div id="socialmenu" class="social-menu">
													<ul class="social-icons">
														<li class="social-menu-twitter"><a href="https://twitter.com/ciddi89" target="_blank"><i class="fab fa-twitter"></i></a></li>
														<li class="social-menu-facebook"><a href="https://facebook.com/photobc2017" target="_blank"><i class="fab fa-facebook"></i></a></li>
														<li class="social-menu-instagram"><a href="https://instagram.com/christian_behrends_89" target="_blank"><i class="fab fa-instagram"></i></a></li>
													</ul>			
												</div>
										</div>
					</nav>
				</header><!-- #masthead -->

<div class="site-main">
