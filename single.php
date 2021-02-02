<?php
get_header();
?>

		<div class="container row">
				<div id="content" class="col-md">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="btn btn-outline-dark btn-sm">' . esc_html__( '← %title', 'cb-photography' ),
					'next_text' => '<span class="btn btn-outline-dark btn-sm">' . esc_html__( '%title →', 'cb-photography' ),
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
				</div>

		<div id="sidebar" class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

				</div>

<?php
get_footer();
