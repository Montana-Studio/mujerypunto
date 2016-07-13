<?php get_header(); ?>

	<main role="main">
		<section class="contentAll">

			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php echo sprintf( __( '%s Search Results for  ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1></div>
				<div class="categoria-title">Búsqueda</div>
			</div>

			<div class="body-sidebar">

				<?php get_template_part('loop-search'); ?>

				<?php get_template_part('pagination'); ?>

			</div>

			<div class="sidebar">	
				<?php get_sidebar(); ?>
			</div> 

		</section>
	</main>

<?php get_footer(); ?>