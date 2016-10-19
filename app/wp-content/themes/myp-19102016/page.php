<?php get_header(); ?>

	<main>
		<!-- section -->
		<section class="contentAll">
		
			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php the_title(); ?></h1></div>
				<div class="categoria-title">categoria</div>
			</div>
			
            <div class="<?php if(is_page('lo-mas-reciente')) { ?>body-sidebar<?php }else{ ?>body-sidebar content-page<?php } ?>">
            <?php 
				if(is_page('lo-mas-reciente')){ 
					// WP_Query arguments
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array (
						'category_name'          => 'lo-mas-reciente',
						'posts_per_page'         => '21',
						'order'                  => 'DESC',
						'paged'                  => $paged,
						'orderby'                => 'date',
					);

					// The Query
					$pagemasreciente = new WP_Query( $args );

					// The Loop
					if ( $pagemasreciente->have_posts() ) {
						while ( $pagemasreciente->have_posts() ) {
							$pagemasreciente->the_post();
			?>
			<div class="tags-content">

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

			</div>
			<?php
							// do something
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
				}elseif(is_page('quienes-somos')){
					if (have_posts()): while (have_posts()) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

				<?php 
					global $post, $posts;
					$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
					$first_img = $matches [1] [0];
				?>
				<div class="date-post"><?php the_time('l, j F Y'); ?></div>

				<h1 class="title-post"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="tag-post"><?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>

				<div class="content-post">
					<?php the_content(); ?>
				</div>

				<div class="share-single">
					<ul>
						<li>
							<div class="btn-share-single">
								<a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i> Facebook</a>
							</div>
						</li>
						<li>
							<div class="btn-share-single">
								<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i> twitter</a>
							</div>
						</li>
						<li>
							<div class="btn-share-single">
								<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i> google plus</a>
							</div>
						</li>
						<li class="whatsapp">
							<div class="btn-share-single">
								<a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i> whatsapp</a>
							</div>
						</li>
					</ul>
				</div>

				<div class="comments-facebook">
					<h3 class="title-insidepost">Comentarios</h3>
					<div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
				</div>

			</article>
			<?php
					endwhile;
					else:
					endif;
				}elseif(is_page('carolina-guida-huidobro')){
					if (have_posts()): while (have_posts()) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

				<?php 
					global $post, $posts;
					$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
					$first_img = $matches [1] [0];
				?>
				<div class="date-post"><?php the_time('l, j F Y'); ?></div>

				<h1 class="title-post"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="tag-post"><?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>

				<div class="content-post">
					<?php the_content(); ?>
				</div>

				<div class="share-single">
					<ul>
						<li>
							<div class="btn-share-single">
								<a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i> Facebook</a>
							</div>
						</li>
						<li>
							<div class="btn-share-single">
								<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i> twitter</a>
							</div>
						</li>
						<li>
							<div class="btn-share-single">
								<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i> google plus</a>
							</div>
						</li>
						<li class="whatsapp">
							<div class="btn-share-single">
								<a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i> whatsapp</a>
							</div>
						</li>
					</ul>
				</div>

				<div class="comments-facebook">
					<h3 class="title-insidepost">Comentarios</h3>
					<div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
				</div>

			</article>
			<?php
					endwhile;
					else:
					endif;
				}
			?>
			<?php if(is_page('lo-mas-reciente')) { ?>
				<div class="pagination">
					<?php get_template_part('pagination'); ?>
				</div>
			<?php } ?>
			</div>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
