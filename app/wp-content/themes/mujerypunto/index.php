<?php get_header(); ?>

	<main role="main" class="contentAll"> 

		<div class="search-section show-search">  
			<div class="bg-search-secntion"></div>
		</div>
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
