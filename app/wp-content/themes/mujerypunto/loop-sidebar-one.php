<?php query_posts( 'cat=0&showposts=4' ); 
 					while ( have_posts() ) : the_post();
						?>
<div class="post-sidebar">
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
				<h2 class="title-post"><?php the_title(); ?></h2>
				<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
				<div class="social-share">
					<ul>
						<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
						<li class="whatsapp"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>	 					
	
<?php
endwhile; 
?>