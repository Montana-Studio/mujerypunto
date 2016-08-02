<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="contentAll">

			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php _e( 'Archives', 'html5blank' ); ?></h1></div>
				<div class="categoria-title">Archive</div>
			</div>

			<div class="body-sidebar">
				<?php get_template_part('loop-tags'); ?>

				<?php get_template_part('pagination'); ?>
			</div>

			<div class="sidebar">	
				<?php get_sidebar(); ?>
			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
