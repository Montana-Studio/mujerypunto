<?php get_header(); ?>

	<main role="main">
		<section class="contentAll">

			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php _e( 'Page not found', 'html5blank' ); ?></h1></div>
			</div>

			<div class="error-page">

				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a> 
				</h2>

			</div>

		</section>
	</main>

<?php get_footer(); ?>
