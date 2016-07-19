<?php get_header(); ?>

	<main role="main">
	<section class="contentAll">
		<div class="body-sidebar"> 

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="category-post"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div>

				<?php 
					global $post, $posts;
					$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
					$first_img = $matches [1] [0];
				?>
				<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">
					<div class="bg-contentpost"></div>
				</div>

				<div class="date-post"><?php the_time('l, j F Y'); ?></div>

				<h1 class="title-post"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

				<div class="tag-post"><?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>

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
				
				<div class="content-post" id="loadAdsContent">
					<?php
						the_content();
					?>
				</div>
				
				<div class="comments-facebook">
					<h3 class="title-insidepost">Comentarios</h3>
					<div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
				</div>

				<div class="nav-post">

					<div class="title-bg title-none"><div class="line-bg"></div></div>

					<div class="nav-SinglePost prev-post">
						<div class="arrow-nav"><a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"><i class="fa fa-angle-left"></i></a></div>
						<div class="contentPost">
							<div class="title-post"><?php previous_post_link(); ?> </div>
							<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
						</div>
					</div>

					<div class="nav-SinglePost next-post">

						<div class="contentPost">
							<div class="title-post"><?php next_post_link(); ?> </div>
							<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
						</div>
						<div class="arrow-nav right-nav"><a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"><i class="fa fa-angle-right"></i></a></div>

					</div>		

				</div>

				<div class="post-relacionados">
						<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Lo que podría gustarte</h2></div>
				    	<div class="post-related">
							<ul>
							<?php $orig_post = $post;
								global $post;
								$categories = get_the_category($post->ID);
								if ($categories) {
								$category_ids = array();
								foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								$args=array(
								'category__in' => $category_ids,
								'post__not_in' => array($post->ID),
								'posts_per_page'=> 3, // Number of related posts that will be displayed.
								'caller_get_posts'=>1,
								'orderby'=>'rand' // Randomize the posts
								);
								$my_query = new wp_query( $args );
								if( $my_query->have_posts() ) {
								echo '<div id="perfect-related_by-category" class="clear"><h3 class="title-section"></h3><ul>';
								while( $my_query->have_posts() ) {
								$my_query->the_post(); ?> 
								<li>
									<?php 
										global $post, $posts;
										$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
										$first_img = $matches [1] [0];
									?>
									
								<div class="imagen-contentpost">
									<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">
										<div class="bg-contentpost"></div>
									</div>	
								</div> 

									<div class="content-post">
										<div class="post-inside">
											<h2 class="title-post"><?php the_title(); ?></h2>
											<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
											<div class="social-share">
												<ul>
													<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
													<li><a  href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i></a></li>
													<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<? }
								echo '</ul></div>';
								} }
								$post = $orig_post;
							wp_reset_query(); ?> 
							</ul>
						</div>
				</div>


			</article>

			<?php endwhile; ?>

			<?php else: ?>

			<?php endif; ?>

		</div>
		 <div class="sidebar">
	    	<?php get_sidebar(); ?>
	    </div>
	</section>

	</main>
<?php get_footer(); ?>
