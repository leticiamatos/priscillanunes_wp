<?php get_header(); ?>
	<section class="block_wpr block_main">
		<main role="main">
			<div class="block_cntt">
				<div class="content">

					<span class="title_line"></span>
					<h2 class="page_title"><?php the_title(); ?></h2>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<br class="clear">


						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

				</div>
				<?php get_sidebar(); ?>
				<span class="clear"></span>
			</div>
		</main>
	</section>

<?php get_footer(); ?>
