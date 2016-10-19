			<!-- footer -->
			<footer class="footer">

				<div class="newsletter-footer">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Newsletter</h2></div>
					<div class="bajada-news">Nos gustaría compartir las últimas noticias de Mujer & Punto</div>
					<form>
						<div class="input-form">
							<input type="text" name="name" placeholder="Nombre" id="nombre_newsletter">
						</div>
						<div class="input-form">
							<input type="email" name="correo" placeholder="Correo electrónico" id="correo_newsletter">
						</div>
						<div class="input-form">
                            <div id="myp-newsletter" onclick="ingresa_usuario_newsletter()">Enviar</div>
						</div> 
					</form>
				</div>
				<div class="share-page">
					<div class="content-sharepage">
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/mujerypunto"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a target="_blank" href="https://twitter.com/mujerypunto"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a target="_blank" href="https://plus.google.com/+mujerypunto/videos"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a target="_blank" href="https://www.instagram.com/mujerypunto/"><i class="fa fa-instagram"></i> Instagram</a></li>
							<li><a target="_blank" href="https://www.youtube.com/channel/UC5BJDXtQyzTZzkOXfTzPgrQ"><i class="fa fa-youtube-play"></i> Youtube</a></li>
						</ul>
					</div>
				</div>
				<div class="content-footer">
					<div class="contenedor-footer">
						<ul>
							<li>
								<div class="footer-logobox">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/myp_logo.png" alt="Logo mujer y punto"></a>
								</div>
								<div class="footer-tags">
									<h1><i class="fa fa-circle"></i> Mujer y Punto</h1> 
									<ul class="list-pages"> 
										<li><a href="<?php echo site_url(); ?>/quienes-somos">Sobre Mujer & Punto</a></li>
										<li><a href="mailto:contacto@mujerypunto.com">Contacto Editorial</a></li>
										<li><a href="mailto:asepulveda@mediatrends.cl?subject=Contacto comercial MyP&cc=hugo@mediatrends.cl">Contacto Publicitario</a></li>
									</ul>
								</div>
							</li>
							<li>
								<div class="footer-tags">
									<h3><i class="fa fa-tags"></i> TAGS</h3>
									<ul class="list-pages tags-list"> 
										<?php 
											$tags = get_tags();
											$count=0;
											if ($tags) {
												foreach ($tags as $tag) {
													$count++;
													echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </li> ';
													if( $count >4 ) break;
												}
											}
										?>
									</ul>
								</div>
							</li>
							<li>
								<div class="footer-tags">
									<h3><i class="fa fa-flag-o"></i> CATEGORIAS</h3>
									<ul class="list-pages"> 

										<?php 
											$categories =  wp_list_categories('title_li=');
											$i=0;
											do{
												$categoria_nombre = strtolower(str_replace(' ', '-', $categories[$i]->cat_name));
												$a = get_site_url();
												echo "<li><a href='".$a."/".$categoria_nombre."'> ".$categoria_nombre." </a></li>";
												$i++; 
											}while($i<4);
										?>
									</ul>
								</div>
							</li>
							<li>
								<div class="footer-bottom">
									<div class="parrafo-footer">
										Copyrights © 2016. DERECHOS RESERVADOS
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
        <?php 
			if(!in_category('sexualidad')){
		?>
			<div style="max-width:320px;margin:0 auto;position:fixed;bottom:0;z-index:9999;left:0;right:0;">

				<ins data-revive-zoneid="4" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins><script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>

			</div>
		<?php } ?>
        
		<?php wp_footer(); ?>
		<?php 
			if(is_single()&&!in_category('sexualidad')){
		?>
			<script>
					function inserta_banners(banner1,banner2,banner3){
						var count = $("#loadAdsContent").find("p").length;
						var cantidad_minima_posts_para_tres_banners = 6;
						var cantidad_maxima_posts_para_un_banner = 3;
						var medio = parseInt(count/2);
						
						if(count>6){
							
							$( "#loadAdsContent>p:first-child" ).append( banner1 );
							$( "#loadAdsContent>p:nth-child("+medio+")" ).append( banner2 );
							$( "#loadAdsContent>p:last-child" ).append( banner3 );
						}else{
							if(count<3){
								$( "#loadAdsContent>p:first-child" ).append( banner1 );

							}else if(count<=6 && count >= 3){
							$( "#loadAdsContent>p:first-child" ).append( banner1 );
							$( "#loadAdsContent>p:last-child" ).append( banner3 );

							}	
						} 
					}
					var banner1 = '<ins data-revive-zoneid="14" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins><scr'+'ipt async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></scr'+'ipt><div class="content_300x250"><ins data-revive-zoneid="1" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins><scr'+'ipt async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></scr'+'ipt></div>';
					var banner2 = '<div class="content_300x250"><ins data-revive-zoneid="2" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins><scr'+'ipt async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></scr'+'ipt></div>';
					var banner3 = '<div class="bottom_728x90"><ins data-revive-zoneid="3" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins><scr'+'ipt async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></scr'+'ipt></div>';
					 window.onload =inserta_banners(banner1,banner2,banner3);


					

			</script>
		<?php
			}
		?>
		<script>
            
		    var gallerySliders = new Swiper('.swiper-gallery', {
		        nextButton: '.next-gallery',
		        prevButton: '.prev-gallery',
		        slidesPerView: 3,
		        spaceBetween:0,
		       	breakpoints: {
				780: {
				  slidesPerView: 1,
				  spaceBetweenSlides:0
				}
				}
		    });
		    
			mySwiper = new Swiper('.swiper-container', {
				pagination: '.swiper-pagination',
				paginationType: 'bullets',
				paginationClickable: true,
				autoplay: 4000,
				loop: true,
				slidesPerView: 3,
				spaceBetween:0,
				breakpoints: {
				780: {
				  slidesPerView: 1,
				  spaceBetweenSlides:0
				}
				}
			}); 

			
			function ingresa_usuario_newsletter(){
		        var nombre= $('#nombre_newsletter').val();
		        var correo= $('#correo_newsletter').val();
		        $.ajax({
		            type: 'POST',
		            url: '<?php echo get_template_directory_uri(); ?>/newsletter.php',
		            data: 'nombre='+nombre+'&correo='+correo,
		            success: function(data){
		            	console.log(data);
		                if(data==='exito'){
		                    $('.newsletter-footer form').hide().fadeOut(); 
		                    $('.newsletter-footer .bajada-news').replaceWith('<div class="exito-form">¡Gracias por registrarte en Mujer y Punto! Pronto recibirás más información</div>');
		                }else{
		                    $('.newsletter-footer form').hide().fadeOut(); 
		                    $('.newsletter-footer .bajada-news').replaceWith('<div class="exito-form">¡Ha ocurrido un error! vuelve a intentarlo</div>');
		                }
		            }
		        });
		        return false; 
		    }
			
		</script>
		<?php 

			if(wp_is_mobile()){
		?>
			<ins data-revive-zoneid="9" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
			<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
		<?php		
			}
		?>
		<div style="position:fixed;bottom:0;left:0;right:0;margin:0 auto;width:320px;display:block;z-index:9999;">

			<ins data-revive-zoneid="12" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
			<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
			
		</div>
	</body>
</html>
