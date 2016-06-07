<?php get_header(); ?>

	<main role="main" class="contentAll"> 

		<div class="search-section show-search">  
			<div class="bg-search-secntion"></div>
		</div>
		<section class="home-section">

				<div class="swiper-container">
			        <div class="swiper-wrapper">
			       		 	<?php get_template_part('loop-slider'); ?> 
			        </div>
			        <div class="swiper-pagination"></div>
			    </div>

			    <div class="secction-reciente">
			    	<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Lo más reciente</h2></div>
			    	<div class="content-reciente">

			    		<?php get_template_part('loop-reciente'); ?>  
			    	</div>
			    </div>

			    <div class="body-sidebar">

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Moda</h2></div>
				    	<div class="section-one">
				    		<?php get_template_part('loop-section-one'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Viajes</h2></div>
				    	<div class="section-two">
				    		<?php get_template_part('loop-section-two'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Belleza</h2></div>
				    	<div class="section-three">
				    		<?php get_template_part('loop-section-three'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Relaciones</h2></div>
				    	<div class="section-four">
				    		<?php get_template_part('loop-section-four'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Vida Gourmet</h2></div>
				    	<div class="section-two">
				    		<?php get_template_part('loop-section-two'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Celebrities</h2></div>
				    	<div class="section-one">
				    		<?php get_template_part('loop-section-one'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Fitness / Salud </h2></div>
				    	<div class="section-five">
				    		<?php get_template_part('loop-section-five'); ?>  
				    	</div>
			    	</div>

			    </div>
			    <div class="sidebar">
			    	<?php get_sidebar(); ?>
			    </div>

			    <div class="secction-videos">
			    	<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Videos</h2></div>
		    		<div class="post-video-principal">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
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
									<div class="video-info">
										<div class="vistas"><i class="fa fa-eye"></i> Vistas</div>
									</div>
									<div class="social-share">
										<ul>
											<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
											<li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
											<li class="whatsapp"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></li>
										</ul>
									</div>
									<a href="<?php the_permalink(); ?>"><h2 class="title-post"><?php the_title(); ?></h2></a>
								</div>
							</div>
						</div>
					</div>
					<div class="post-list">
						<div class="post-video">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
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
										<div class="video-info">
											<div class="vistas"><i class="fa fa-eye"></i> Vistas</div>
										</div>
										<div class="social-share">
											<ul>
												<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
												<li class="whatsapp"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></li>
											</ul>
										</div>
										<a href="<?php the_permalink(); ?>"><h2 class="title-post"><?php the_title(); ?></h2></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-video">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
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
										<div class="video-info">
											<div class="vistas"><i class="fa fa-eye"></i> Vistas</div>
										</div>
										<div class="social-share">
											<ul>
												<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
												<li class="whatsapp"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></li>
											</ul>
										</div>
										<a href="<?php the_permalink(); ?>"><h2 class="title-post"><?php the_title(); ?></h2></a>
									</div>
								</div>
							</div>
						</div>
					</div>
			    </div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
