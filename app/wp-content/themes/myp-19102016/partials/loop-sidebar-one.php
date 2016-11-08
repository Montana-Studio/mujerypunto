<?php 
// WP_Query arguments
$args = array (
	'posts_per_page' => 5, 
	'meta_key' => 'popular_posts', 
	'orderby' => 'meta_value_num', 
	'order' => 'DESC'
);

// The Query
$sidebartwo = new WP_Query( $args );

// The Loop
if ( $sidebartwo->have_posts() ) {
	while ( $sidebartwo->have_posts() ) {
		$sidebartwo->the_post();
?>
<div class="post-sidebar">
	<div id="post-sidebar-<?php the_ID(); ?>" <?php post_class(); ?>> 

		<div class="imagen-contentpost">
			<a href="<?php the_permalink(); ?>">
			<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
				<div class="bg-contentpost"></div>
			</div>	
			</a>
		</div>

		<div class="content-post">
			<div class="post-inside">
				<a href="<?php the_permalink(); ?>">
					<div class="title-post">
						<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 45;
							echo substr($thetitle, 0, $thelength);
							if ($getlength > $thelength) echo "...";
						?>
					</div>
				</a>
				<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
				<div class="social-share">
					<ul>
						<li>
							<a class="facebook_share_sidebar1">
								<i class="fa fa-facebook"></i> 
							</a>
						</li>
						<li>
							<a class="twitter_share_sidebar1">
								<i class="fa fa-twitter"></i> 
							</a>
						</li>
						<li>
							<a class="plus_share_sidebar1">
								<i class="fa fa-google-plus"></i> 
							</a>
						</li>
						<li class="whatsapp">
							<?php $title = strtolower(str_replace(' ', '-', the_title('', '', false))) ?>
							<a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" data-href="<?php echo the_permalink(); ?>"><i class="fa fa-whatsapp"></i></a>
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