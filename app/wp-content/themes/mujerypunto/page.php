<?php get_header(); ?>

	<main role="main">
		<section class="contentAll">

    		<div class="header-page">
    			<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php the_title(); ?></h1></div>
    			<div class="categoria-title">categoria</div>
    		</div>
           
            <?php if(is_page('lo-mas-reciente')) { ?>
                <div class="body-sidebar">
             <?php }else { ?> 
                <div class="body-sidebar content-page">
            <?php } ?> 			

                <?php 

                    if(is_page('lo-mas-reciente')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'lo-mas-reciente',
                            'posts_per_page'         => '21',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date', 
                        ); 

                        // The Query
                        $wp_query = new WP_Query( $args );

                        // The Loop
                        if ( $wp_query->have_posts() ) {
                            while ( $wp_query->have_posts() ) {
                                $wp_query->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?> 

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();   

                    }elseif(is_page('quienes-somos')){

                       ?>
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <article class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

                            <?php endwhile; ?>

                            <?php else: ?>

                            <?php endif; ?>

                       <?php

                    }elseif(is_page('carolina-guida-huidobro')){

                       ?>
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <article class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

                            <?php endwhile; ?>

                            <?php else: ?>

                            <?php endif; ?>

                       <?php

                    }
                ?> 

                <div class="custom-pagination">
                     <?php kriesi_pagination(); ?> 
                </div>

			</div>

			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>

		</section>
	</main>

<?php get_footer(); ?>
