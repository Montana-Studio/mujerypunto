<?php get_header(); ?>

	<main class="contentAll"> 

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

				<div class="header_970x250">
					<ins data-revive-zoneid="15" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
					<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>	
				</div>
		    
			    <div class="secction-reciente">
			    	<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Lo más reciente</h2></div>
			    	<div class="content-reciente">
			    		<?php get_template_part('loop-reciente'); ?>  
			    	</div>
			    </div>

			    <div class="sidebar">
			    	<?php get_sidebar(); ?>
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
				    		<?php get_template_part('loop-section-five'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Celebrities</h2></div>
				    	<div class="section-one">
				    		<?php get_template_part('loop-section-six'); ?> 
				    	</div>
			    	</div>

			    	<div class="section-loop">
			    		<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Fitness / Salud </h2></div>
				    	<div class="section-five">
				    		<?php get_template_part('loop-section-seven'); ?>  
				    	</div>
			    	</div>
			    </div>
<<<<<<< HEAD
=======

			    <div class="secction-videos">
			    	<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Videos</h2></div>
                    <?php                get_template_part('loop-video1'); ?>
                    <?php//                get_template_part('loop-video1'); ?>
					
                    
                </div>  

	            <script type="text/javascript">

	            	function ytapiAdd() {
					    if (!window['YT']) {var YT = {loading: 0,loaded: 0};}if (!window['YTConfig']) {var YTConfig = {'host': 'http://www.youtube.com'};}if (!YT.loading) {YT.loading = 1;(function(){var l = [];YT.ready = function(f) {if (YT.loaded) {f();} else {l.push(f);}};window.onYTReady = function() {YT.loaded = 1;for (var i = 0; i < l.length; i++) {try {l[i]();} catch (e) {}}};YT.setConfig = function(c) {for (var k in c) {if (c.hasOwnProperty(k)) {YTConfig[k] = c[k];}}};var a = document.createElement('script');a.type = 'text/javascript';a.id = 'www-widgetapi-script';a.src = 'https:' + '//s.ytimg.com/yts/jsbin/www-widgetapi-vfl9y3wzY/www-widgetapi.js';a.async = true;var b = document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a, b);})();}
					}

					var playerss;
					function onYouTubePlayerAPIReady() {
						var players = document.querySelectorAll('.embeVideo');
						for (var i = 0; i < players.length; i++) {
							playerss = new YT.Player(players[i], {
								playerVars: {'controls': 0,'rel':0,'showinfo':0},
								events:{
									'onStateChange': onPlayerStateChange,
								},
								videoId: players[i].dataset.id
							});
						}

						if(playerss) {  
							jQuery(document).ready(function($){
								$.ajaxSetup({cache:false});

									$(".post-video").click(function(){
										
										//Obtengo url de imagen, fecha y titulo desde el click
										var fecha = $(this).find('.vistas').html();
										var titulo = $(this).find('.title-post').text();

										//Obtengo url de imagen, fecha y titulo desde principal                                    
										var titulo_principal = $(".titulo-principal").html();
										var fecha_principal = $(".vistas-principal").html();

										//Agrego datos en principal
										$(".titulo-principal").html(titulo);
										$(".vistas-principal").html(fecha);
										 										
										//return false;
									});


							});
						}
					}

					function loadVideo(videoID) {
						playerss.loadVideoById(videoID);
					}


					function onPlayerStateChange(event) {
						if(event.data === 1){          
							
						}else if(event.data === 2||event.data === 0 ){
							

						}

					}

					ytapiAdd();
					//onYouTubePlayerAPIReady();
                </script>
>>>>>>> parent of 9fb54e4... add Events GA for shares and newsletter
				
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
