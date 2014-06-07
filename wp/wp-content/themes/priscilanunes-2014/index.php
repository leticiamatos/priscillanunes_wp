<?php get_header(); ?>

	<!-- BEGIN slideshow -->
	<section class="block_wpr block_slideshow">
		<div class="block_cntt">
			<ul class="bxslider-banner">
				<li class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/z_lixo/slide01.jpg" title="nnntitulo" />
					<div class="text">
						<h2><a href="#">Tootsie roll carrot cake macaroon</a></h2><br/>
						<p><a href="#">Pastry chocolate bar fruitcake. Soufflé sweet roll wafer powder powder</a></p>
					</div>
					<span class="line"></span>
				</li>
				<li class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/z_lixo/slide02.jpg" title="nnntitulo" />
					<div class="text">
						<h2><a href="#">Tootsie roll carrot cake macaroon</a></h2><br/>
						<p><a href="#">Pastry chocolate bar fruitcake. Soufflé sweet roll wafer powder powder</a></p>
					</div>
					<span class="line"></span>
				</li>
				<li class="slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/z_lixo/slide03.jpg" title="nnntitulo" />
					<div class="text">
						<h2><a href="#">Tootsie roll carrot cake macaroon</a></h2><br/>
						<p><a href="#">Pastry chocolate bar fruitcake. Soufflé sweet roll wafer powder powder</a></p>
					</div>
					<span class="line"></span>
				</li>
			</ul>
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

					<?php get_template_part('pagination'); ?>
				</div>
				<?php get_sidebar(); ?>
				<span class="clear"></span>
			</div>
		</main>
	</section>


<?php get_footer(); ?>
