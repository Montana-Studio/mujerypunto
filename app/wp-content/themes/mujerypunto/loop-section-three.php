<?php query_posts( 'category_name=belleza&showposts=4' ); 
 					while ( have_posts() ) : the_post();
						?>
<div class="post-sect-three">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

		<div class="imagen-contentpost">
			<a href="<?php the_permalink(); ?>">
			<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
				<div class="bg-contentpost"></div>
			</div>	
			</a>
		</div>

		<div class="content-post">
			<div class="post-inside">
				<div class="category-post"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div>
				<span class="date-post"><?php the_time('l, j F Y'); ?></span>
				<a href="<?php the_permalink(); ?>"><h2 class="title-post"><?php the_title(); ?></h2></a> 
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