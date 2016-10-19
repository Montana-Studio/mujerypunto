<?php get_header(); ?>

	<main>
		<!-- section -->
		<section class="contentAll">
			
			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php _e( 'Categories for', 'html5blank' ); ?> <?php single_cat_title(); ?></h1></div>
				<div class="categoria-title">categoria</div>
			</div>
			<div class="body-sidebar">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div class="tags-content">
				<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
								<a href="<?php the_permalink(); ?>"><h2 class="title-post"><?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
									echo substr($thetitle, 0, $thelength);
									if ($getlength > $thelength) echo "...";
									?></h2></a> 
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
											<a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" data-href="http://69.64.43.207/~mujerypunto"><i class="fa fa-whatsapp"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</article>
				<!-- /article -->
				</div>
				<?php endwhile; ?>

				<?php else: ?>

				<?php endif; ?>
				
				<div class="pagination">
					<?php get_template_part('pagination'); ?>
				</div>
				
			</div>
			
			<div class="sidebar">	
				<?php get_sidebar(); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
