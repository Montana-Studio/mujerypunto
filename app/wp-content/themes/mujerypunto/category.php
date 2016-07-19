<?php get_header(); ?>

	<main role="main">
		<section class="contentAll">

			<div class="header-page">
				<div class="title-bg"><div class="line-bg"></div><h1 class="title-section"><?php _e( 'Categories for', 'html5blank' ); ?> <?php single_cat_title(); ?></h1></div>
				<div class="categoria-title">categoria</div>
			</div>

			<div class="body-sidebar">

    			<?php 

                    if(is_category('moda-y-estilo')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'moda-y-estilo',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date', 
                        ); 

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();   

                    }elseif(is_category('relaciones')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'relaciones',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('belleza')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('belleza') : 1;
                        $args = array (
                            'category_name'          => 'belleza',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('vida-gourmet')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'vida-gourmet',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('viajes')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'viajes',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('celebrities')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'celebrities',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args ); 


                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('sanz-y-punto')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'sanz-y-punto',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('actualidad')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'actualidad',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('artes-espectaculos')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'artes-espectaculos',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('chile')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'chile',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('columnas-de-la-caro')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'columnas-de-la-caro',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('concursos')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'concursos',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('crianza')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'crianza',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('eventos-y-lanzamientos')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'eventos-y-lanzamientos',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('fitness')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'fitness',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('la-mirada-de-ellos')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'la-mirada-de-ellos',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('la-ruta-de-la-novia')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'la-ruta-de-la-novia',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('lo-mas-reciente')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'lo-mas-reciente',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('mexico')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'mexico',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('mujer-actual')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'mujer-actual',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('mujeres-que-encantan')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'mujeres-que-encantan',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('radio-mujer-y-punto')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'radio-mujer-y-punto',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('reviews')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'reviews',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('ser-feliz-y-coaching')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'ser-feliz-y-coaching',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('sexualidad')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'sexualidad',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('sobre-mujer-y-punto')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'sobre-mujer-y-punto',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_category('datos-y-panoramas')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'datos-y-panoramas',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-tags'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }
                ?> 

				<!--div class="paginacion-sect">
                    <div class="pagination">
                        <?php // kriesi_pagination(); ?> 
                    </div>
                </div-->
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
