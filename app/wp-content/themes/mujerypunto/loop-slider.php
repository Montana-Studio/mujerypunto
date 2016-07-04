<?php 
	// WP_Query arguments
	$args = array (
		'category_name'          => 'destacados',
		'posts_per_page'         => '9',
	);

	// The Query
	$secFive = new WP_Query( $args );

	// The Loop
	if ( $secFive->have_posts() ) {
		while ( $secFive->have_posts() ) {
			$secFive->the_post();
			$do_not_duplicate = $post->ID;
?>
<div class="swiper-slide">	
	<div id="post-slider-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
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