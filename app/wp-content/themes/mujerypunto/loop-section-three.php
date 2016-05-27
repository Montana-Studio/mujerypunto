<?php query_posts( 'cat=0&showposts=4' ); 
 					while ( have_posts() ) : the_post();
						?>
<div class="post-sect-three">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

		<?php 
			global $post, $posts;
			$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
			$first_img = $matches [1] [0];
		?>
		<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">
			<div class="bg-contentpost"></div>
		</div>

		<div class="content-post">
			<div class="post-inside">
				<div class="category-post"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div>
				<span class="date-post"><?php the_time('l, j F Y'); ?></span>
				<h2 class="title-post"><?php the_title(); ?></h2>
				<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
				<div class="social-share">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>						
	
<?php
endwhile; 
?>