<?php 
	// WP_Query arguments
	$args = array (
		'category_name'          => 'celebrities',
		'posts_per_page'         => '4',
	);

	// The Query
	$secFive = new WP_Query( $args );

	// The Loop
	if ( $secFive->have_posts() ) {
		while ( $secFive->have_posts() ) {
			$secFive->the_post();
			if ( $post->ID == $do_not_duplicate ) continue;	
?>
<div class="post-sect-one">
	<div id="post-six-<?php the_ID(); ?>" <?php post_class(); ?>> 

		<div class="imagen-contentpost">
			<a href="<?php the_permalink(); ?>">
			<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
				<div class="bg-contentpost"></div>
			</div>	
			</a>
		</div> 
		
		<div class="content-post">
			<div class="post-inside">
				<div class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
				<div class="social-share">
					<ul>
						<li>
							<a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)">
								<i class="fa fa-facebook"></i> 
							</a>
						</li>
						<li>
							<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)">
								<i class="fa fa-twitter"></i> 
							</a>
						</li>
						<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
								<i class="fa fa-google-plus"></i> 
							</a>
						</li>
						<li class="whatsapp">
							<?php $title = strtolower(str_replace(' ', '-', the_title('', '', false))) ?>
							<a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" data-href="<?php the_permalink(); ?>"><i class="fa fa-whatsapp"></i></a>
						</li>
					</ul>
				</div>
			</div>
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