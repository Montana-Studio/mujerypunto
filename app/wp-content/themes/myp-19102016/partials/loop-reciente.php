<?php
	// WP_Query arguments
	$args = array (
		'category_name'          => 'lo-mas-reciente',
		'posts_per_page'         => '5',
	);

	// The Query
	$masreciente = new WP_Query( $args );

	// The Loop
	if ( $masreciente->have_posts() ) {
		while ( $masreciente->have_posts() ) {
			$masreciente->the_post();
			if ($contador==0 || $contador==3){ 
				?>
					<div class="column-one">
						<div class="post-reciente">
							<div id="post-rec-<?php the_ID(); ?>" <?php post_class(); ?>> 
								<div class="imagen-contentpost">
									<a href="<?php the_permalink(); ?>">
										<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
											<div class="bg-contentpost"></div>
										</div>	
									</a>
								</div>
								<div class="content-post">
									<div class="post-inside">
										<h4 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
												<li>
													<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
														<i class="fa fa-google-plus"></i> 
													</a>
												</li>
												<li class="whatsapp">
													<?php $title = strtolower(str_replace(' ', '-', the_title('', '', false))) ?>
													<a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" data-href="<?php the_permalink(); ?>"><i class="fa fa-whatsapp"></i>
													</a>
												</li>    
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>	
				<?php }else if($contador==1 || $contador==4){ ?>
						<div class="post-reciente">
							<div id="post-rec-<?php the_ID(); ?>" <?php post_class(); ?>> 
								<div class="imagen-contentpost">
									<a href="<?php the_permalink(); ?>">
									<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
										<div class="bg-contentpost"></div>
									</div>	
									</a>
								</div>
								<div class="content-post">
									<div class="post-inside">
										<h4 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
										<div class="social-share">
											<ul>
												<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
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
					</div>
				<?php }else{ ?>
						<div class="column-two">
							<div class="post-reciente">
								<div id="post-rec-<?php the_ID(); ?>" <?php post_class(); ?>> 
									<div class="imagen-contentpost">
										<a href="<?php the_permalink(); ?>">
										<div class="lazy imagen-post" data-original="<?php the_post_thumbnail_url(300,300); ?>" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/img/grey.gif');">
											<div class="bg-contentpost"></div>
										</div>	
										</a>
									</div>
									<div class="content-post">
										<div class="post-inside">
											<h4 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="btn-read-green"><a href="<?php the_permalink(); ?>">Seguir Leyendo</a></div>
											<div class="social-share">
												<ul>
													<li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
													<li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i></a></li>
													<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
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
						</div>
				<?php }

			$contador++;
	
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
?>