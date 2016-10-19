<?php get_header(); ?>

	<main class="contentAll">
		
		<div class="search-section show-search">  
			<div class="bg-search-secntion"></div>
		</div>
		<!-- section -->
		<section class="home-section">
			
			<div class="swiper-container">
				<div class="swiper-wrapper">
						<?php get_template_part('partials/loop-slider'); ?> 
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
					<?php get_template_part('partials/loop-reciente'); ?>  
				</div>
			</div>
		
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
			
			<div class="body-sidebar">
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Moda</h2></div>
					<div class="section-one">
						<?php get_template_part('partials/loop-section-one'); ?> 
					</div>
				</div>
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Viajes</h2></div>
					<div class="section-two">
						<?php get_template_part('partials/loop-section-two'); ?> 
					</div>
				</div>
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Belleza</h2></div>
					<div class="section-three">
						<?php get_template_part('partials/loop-section-three'); ?> 
					</div>
				</div>
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Relaciones</h2></div>
					<div class="section-four">
						<?php get_template_part('partials/loop-section-four'); ?> 
					</div>
				</div>
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Vida Gourmet</h2></div>
					<div class="section-two">
						<?php get_template_part('partials/loop-section-five'); ?> 
					</div>
				</div>
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Celebrities</h2></div>
					<div class="section-one">
						<?php get_template_part('partials/loop-section-six'); ?> 
					</div>
				</div>
				<div class="section-loop">
					<div class="title-bg"><div class="line-bg"></div><h2 class="title-section">Fitness / Salud </h2></div>
					<div class="section-five">
						<?php get_template_part('partials/loop-section-seven'); ?>  
					</div>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
