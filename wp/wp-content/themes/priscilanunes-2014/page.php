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

<!-- Form Contato

<div class="form_name form_item">
	<label for="name">Nome</label>
	[text* name id:name class:txt]
</div>
<div class="form_name form_item">
	<label for="mail">E-mail</label>
	[text* email id:email class:txt]
</div>
<div class="form_name form_item">
	<label for="msg">Nome</label>
	[textarea* msg id:msg class:txt]
</div>
<div class="form_buttons">
	[submit id:submit class:btn_submit "Enviar"]
</div>

-->
