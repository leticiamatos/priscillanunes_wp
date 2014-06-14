<?php get_header(); ?>

	<div class="headerslider"> </div>

	<!-- BEGIN slideshow -->
	<section class="block_wpr block_slideshow">
		<div class="block_cntt">
			<?php echo do_shortcode('[sp_responsiveslider limit="-1"]'); ?>
			<div class="slide_control_wpr">
				<p id="control_prev"></p>
				<p id="control_next"></p>
			</div>
		</div>
	</section>
	<!-- END slideshow -->


	<section class="block_wpr block_main">
		<main role="main">
			<div class="block_cntt">
				<div class="content">

					<span class="title_line"></span>
					<h2 class="page_title"><?php _e( 'Latest Posts', 'html5blank' ); ?></h2>

					<?php get_template_part('loop'); ?>

					<?//php get_template_part('pagination'); ?>
				</div>
				<?php get_sidebar(); ?>
				<span class="clear"></span>
			</div>
		</main>
	</section>


<?php get_footer(); ?>
