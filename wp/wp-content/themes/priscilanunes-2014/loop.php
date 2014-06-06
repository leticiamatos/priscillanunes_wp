<div class="post_list">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="col_01">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumb">
					<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<span class="cat"><a href="#">Nome da Categoria</a></span>
		</div>
		<div class="col_02">
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<div class="text">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</div>
			<a class="link" href="<?php the_permalink(); ?>"></a>
		</div>

		<span class="clear"></span>
	</div>
	<span class="line line-col_01"></span>
	<span class="line line-col_02"></span>
	<div class="article_margin"></div>
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
