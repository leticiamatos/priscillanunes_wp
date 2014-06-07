<?php get_header(); ?>

	<section class="block_wpr block_main">
		<main role="main">
			<div class="block_cntt">
				<div class="content">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<span class="title_line"></span>
						<span class="post_info">
							Categoria&nbsp;&nbsp;::&nbsp;&nbsp;
							<?php the_category(); ?>&nbsp;&nbsp;
							-&nbsp;&nbsp; 
							Postado em&nbsp;&nbsp;::&nbsp;&nbsp;
							<strong><?php the_time('d/m/Y')?></strong>
						</span>
						<span class="post_info_line line"></span>
						<h2 class="post_title"><?php the_title(); ?></h2>
					
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
