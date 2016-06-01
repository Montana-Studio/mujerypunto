			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="newsletter-footer">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Newsletter</h2></div>
					<div class="bajada-news">Nos gustaría compartir las últimas noticias de Mujer & Punto</div>
					<form action="">
						<div class="input-form">
							<input type="text" name="name" placeholder="Nombre">
						</div>
						<div class="input-form">
							<input type="email" name="correo" placeholder="Correo electrónico">
						</div>
						<div class="input-form">
							<input type="submit" value="Suscribir">
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
									<h3><i class="fa fa-circle"></i> M&P</h3>
									<ul class="list-pages"> 
										<li><a href="#">Sobre Mujer & Punto</a></li>
										<li><a href="#">Contacto Editorial</a></li>
										<li><a href="#">Contacto Publicitario</a></li>
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
													echo '<li>#<a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </li> ';
													if( $count >10 ) break;
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
										<?php wp_list_categories('orderby=name&title_li'); ?>
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

		<?php wp_footer(); ?>
		<script> 
		    var gallerySliders = new Swiper('.swiper-gallery', {
		        nextButton: '.next-gallery',
		        prevButton: '.prev-gallery',
		        slidesPerView: 3,
		        spaceBetween:0,
		       	breakpoints: {
				640: {
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
				640: {
				  slidesPerView: 1,
				  spaceBetweenSlides:0
				}
				}

			}); 
		</script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
