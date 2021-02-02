<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="card mb-3">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-4">
				<?php if(has_post_thumbnail()):?>
				<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="card-img">
				<?php endif;?>
			</div>

			<div class="col-md-7 card-body">
				<header class="blog-card-title">
					<?php
					if ( is_singular() ) :
						the_title( '<h2 class="blog-card-title">', '</h2>' );
					else :
						the_title( '<h4 class="blog-card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-meta card-text">
				<?php
				cb_photography_posted_on();
				?>
				</div><!-- .entry-meta -->

			<div class="entry-content">
				<?php
				the_excerpt(
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
				<div class="archive-btn">
				<a href="<?php the_permalink();?>" class="btn btn-outline-dark btn-sm">Mehr Lesen</a>
			</div>
			</div><!-- .entry-content -->
		</div>
	</div>

</div> <!-- card class -->
</article><!-- #post-<?php the_ID(); ?> -->
