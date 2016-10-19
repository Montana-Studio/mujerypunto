<?php
	$args = array (
		'category_name'          => 'destacados',
		'posts_per_page'         => '6',
	);

	// The Query
	$slider = new WP_Query( $args );

	// The Loop
	if ( $slider->have_posts() ) {
		while ( $slider->have_posts() ) {
			$slider->the_post(); 
			?>
				<div class="swiper-slide">	
					<div id="post-slider-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="imagen-post" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							<div class="content-post-all">
								<div class="post-inside">
									<div class="category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="btn-read-more"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
								</div>
							</div>
							<div class="bg-contentpost"></div>
						</div>

					</div>
				</div>	
			<?php
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
?>