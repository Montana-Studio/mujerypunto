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
                            <div id="myp-newsletter" >Enviar</div>
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
										<li><a href="/quienes-somos">Sobre Mujer & Punto</a></li>
										<li><a href="mailto:contacto@mujerypunto.com">Contacto Editorial</a></li>
										<li><a href="mailto:aseulveda@mediatrends.cl?subject=Contacto comercial MyP&cc=hugo@mediatrends.cl">Contacto Publicitario</a></li>
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

				<ins data-revive-zoneid="4" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
				<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>

			</div>
		<?php } ?>
        
		<?php wp_footer(); ?>
		
		<?php 
			if(is_single()&&!in_category('sexualidad')){
		?>
			<script>
				$(document).ready(function(){
					function inserta_banners(banner1,banner2,banner3){
						var count = $(".content-post").find("p").length;
						var cantidad_minima_posts_para_tres_banners = 6;
						var cantidad_maxima_posts_para_un_banner = 3;
						if(count>cantidad_minima_posts_para_tres_banners){
							var medio = parseInt(count/2);
							$( "p:nth-child(2)" ).append( banner1);
							$( "p:nth-child("+medio+")" ).append( banner2 );
							$( "p:nth-child("+count+")" ).append( banner3 );
						}
						if(count<cantidad_maxima_posts_para_un_banner){
							var medio = parseInt(count/2);
							$( "p:nth-child(2)" ).append( "<strong>"+banner1+"</strong>" );
						}
						if(count<=cantidad_minima_posts_para_tres_banners && count >= cantidad_maxima_posts_para_un_banner){
							var medio = parseInt(count/2);
							$( "p:nth-child(2)" ).append( "<strong>"+banner1+"</strong>" );
							$( "p:nth-child("+medio+")" ).append( "<strong>"+banner2+"</strong>" );
						}
					}
var banner1 = '<div class="content_300x250"><iframe id="a9b85a31" name="a9b85a31" src="http://bloques.mujerypunto.com/activos/www/mtnetd/afr.php?zoneid=2&amp;target=_blank&amp;cb={random}&amp;ct0={clickurl_enc}" frameborder="0" scrolling="no" width="300" height="250"><a href="http://bloques.mujerypunto.com/activos/www/mtnetd/ck.php?n=ab1bb9ea&amp;cb={random}" target="_blank"><img src="http://bloques.mujerypunto.com/activos/www/mtnetd/avw.php?zoneid=2&amp;cb={random}&amp;n=ab1bb9ea&amp;ct0={clickurl_enc}" border="0" alt="" /></a></iframe></div>';
var banner2 = '<div class="content_300x250"><iframe id="a1503047" name="a1503047" src="http://bloques.mujerypunto.com/activos/www/mtnetd/afr.php?zoneid=10&amp;target=_blank&amp;cb={random}&amp;ct0={clickurl_enc}" frameborder="0" scrolling="no" width="300" height="250"><a href="http://bloques.mujerypunto.com/activos/www/mtnetd/ck.php?n=a2b832b4&amp;cb={random}" target="_blank"><img src="http://bloques.mujerypunto.com/activos/www/mtnetd/avw.php?zoneid=10&amp;cb={random}&amp;n=a2b832b4&amp;ct0={clickurl_enc}" border="0" alt="" /></a></iframe></div>';
var banner3 = '<div class="bottom_728x90"><ins data-revive-zoneid="3" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>						<sc'+'ript async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></scr'+'ipt></div>';
					inserta_banners(banner1,banner2,banner3);
				});
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
		</script>
            
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66760107-1', 'auto');
          ga('send', 'pageview');

        </script>

		<script type='text/javascript'><!--//<![CDATA[
		   var ox_u = 'http://bloques.mujerypunto.com/activos/www/mtnetd/al.php?zoneid=9&target=_blank&cb={random}&ct0={clickurl_enc}&layerstyle=simple&align=center&valign=middle&padding=0&padding=0&shifth=0&shiftv=0&closebutton=f&nobg=t&noborder=t';
		   if (document.context) ox_u += '&context=' + escape(document.context);
		   document.write("<scr"+"ipt type='text/javascript' src='" + ox_u + "'></scr"+"ipt>");
		//]]>--></script>
		
	</body>
</html>
