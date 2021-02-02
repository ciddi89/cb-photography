
</div><!-- #content -->
</div><!-- #wrapper -->

	<footer class="site-footer">

		<div id="footer-widgets" class="footer-widgets container">
			<div id="footer-sidebar" class="footer-sidebar-1">
				<?php if( is_active_sidebar('footerfull') ):?>
				<?php dynamic_sidebar('footerfull'); ?>
				<?php endif; ?>
			</div>
		</div>

		<div id="footer-bottom" class="footer-bottom container row">
			<div id="footermenu" class="col-md-6 order-md-2">
		        <?php
		        wp_nav_menu(
		        array(
		        'menu'               => 'footer',
		        'theme_location'     => 'menu-2',
		        'menu_class' => 'footer-menu'
		        ) );
		        ?>
		    </div>

			<div id="footer-siteinfo" class="site-info col-md-6">
				<?php
				/* translators: 1: Site-link. */
				printf( esc_html__( '©&nbsp;%1$s&nbsp;2020. All Rights Reserved.' ), '<a href="https://www.christian-behrends.de">Christian-Behrends.de</a>' );
				?>
			</div>
		</div>

	</footer>
	
</div>

</div><!-- #page-container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
