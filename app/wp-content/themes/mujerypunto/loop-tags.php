<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="tags-content">
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php 
				global $post, $posts;
				$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
				$first_img = $matches [1] [0];
			?>
			<div class="imagen-contentpost">
				<a href="<?php the_permalink(); ?>">
				<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">
					<div class="bg-contentpost"></div>
				</div>	
				</a>
			</div>

			<div class="content-post">
				<div class="post-inside">
					<div class="category-post"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div>
					<span class="date-post"><?php the_time('l, j F Y'); ?></span>
					<h2 class="title-post"><?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
						?></h2>
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

		</article>

	</div>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>

<?php endif; ?>