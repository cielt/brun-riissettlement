<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
					<img src="<?php the_field('top_image'); ?>" alt="<?php the_field('top_image_alt'); ?>" />
					<div class="image_label"><?php the_field('top_image_label'); ?></div>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php the_field('featured_text'); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'brunelleschi' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'brunelleschi' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>