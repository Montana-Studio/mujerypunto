<?php get_header(); ?>

	<main role="main">
		<section class="contentAll">

			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1></div>
				<div class="categoria-title">tags</div>
			</div>

			<div class="body-sidebar">

				<?php get_template_part('loop-tags'); ?>

				<?php get_template_part('pagination'); ?>

			</div>

			<div class="sidebar">	
				<?php get_sidebar(); ?>
			</div>

		</section>
	</main>

<?php get_footer(); ?>
