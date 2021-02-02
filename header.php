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

				    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
				    			<span class="navbar-toggler-icon"></span>
							</button>
							
        						<?php
        							wp_nav_menu( array(
        						    	'theme_location'    => 'menu-1',
        						    	'depth'             => 2,
        						    	'container'         => 'div',
        						    	'container_class'   => 'collapse navbar-collapse',
        						    	'container_id'      => 'navbarToggler',
        						    	'menu_class'        => 'navbar-nav ml-auto',
        						    	'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        						    	'walker'            => new WP_Bootstrap_Navwalker(),
       								) );
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
