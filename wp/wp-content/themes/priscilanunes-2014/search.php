<?php get_header(); ?>

	<section class="block_wpr block_main">
		<main role="main">
			<div class="block_cntt">
				<div class="content">

					<span class="title_line"></span>
					<h2 class="page_title">"<?php echo get_search_query(); ?>"</h2>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

			</div>
			<?php get_sidebar(); ?>
			<span class="clear"></span>
		</main>
	</section>

<?php get_footer(); ?>
