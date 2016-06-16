<?php query_posts( 'cat=0&showposts=9' );
 					while ( have_posts() ) : the_post();
						?>
<div class="swiper-slide">	
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
			<div class="content-post-all">
				<div class="post-inside">
					<div class="category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div>
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 
					<div class="btn-read-more"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
				</div>
			</div>
			<div class="bg-contentpost"></div>
		</div>

	</div>
</div>	
<?php
endwhile;
?>