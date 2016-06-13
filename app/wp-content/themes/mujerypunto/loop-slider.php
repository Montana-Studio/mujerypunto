<?php query_posts( 'cat=0&showposts=9' );
 					while ( have_posts() ) : the_post();
						?>
<div class="swiper-slide">	
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php 
			global $post, $posts;
			$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
			$first_img = $matches [1] [0];
		?>
		<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">
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