<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php cb_photography_post_thumbnail(); ?>

	<header class="blog-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="blog-title">', '</h2>' );
		else :
			the_title( '<h3 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>

			<div class="entry-meta">
				<li class="meta-date"><i class="far fa-clock"></i> <?php echo get_the_date('F j, Y');?></li>

				<li class="meta-cat"><i class="far fa-folder"></i> <?php echo get_the_category_list( $separator = ', ', $parents = ' ,', $post_id = false )?></li>

			</div><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content blog-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cb-photography' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cb-photography' ),
				'after'  => '</div>',
			)
		);
		?>


	</div><!-- .entry-content -->
