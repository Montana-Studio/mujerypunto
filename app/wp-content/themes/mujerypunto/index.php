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

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
