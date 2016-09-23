<!-- sidebar -->
<aside class="sidebar-content">

    <?php if(is_single()&&wp_is_mobile()) { ?>
		
    <?php }else{ ?>
    
		<div class="sidebar_300x250">
			<ins data-revive-zoneid="6" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
			<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
		</div>
		
		<div class="sidebar_300x250">
			<ins data-revive-zoneid="13" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
			<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
		</div>
		
		<div class="box-sidebar">
			<div class="title-sidebar"><i class="fa fa-star-o"></i> Lo más popular</div>
			<div class="content-sidebar">
	    		<?php get_template_part('loop-sidebar-one'); ?> 
	    	</div>
		</div>

		<div class="facebook-sidebar">
			
			<div id="fb-timeline"></div>
			
			<script>
				jQuery(document).ready(function($){
					window.addEventListener('load', function(){
						$('#fb-timeline').load('<?php echo get_template_directory_uri(); ?>/fb-timeline.html',function(){});
					});
				});
			</script>
		</div>

		<div class="box-sidebar instagram">
			<div class="title-sidebar"><i class="fa fa-instagram"></i> Instagram</div>
			<div class="list-instagram ">
				<ul>
					<?php get_template_part('instagram'); ?> 
				</ul>
			</div>	 
		</div>

		<div class="sidebar_300x250">
			
			<ins data-revive-zoneid="7" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
			<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
			
		</div>
		
		<div class="box-sidebar imperdibles-sidebar">
			<div class="title-sidebar"><i class="fa fa-star-o"></i> Imperdibles M&P</div>
			<div class="content-sidebar">
	    		<?php get_template_part('loop-sidebar-two'); ?> 
	    	</div> 
		</div>
		<div class="sidebar_300x250">

			<ins data-revive-zoneid="8" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
			<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
			
		</div>

		<div class="sidebar-box-one contacto-banner">
			<div class="inside-contact contacto-editorial">
				<div class="title-contact">
					<div class="title-one">Contacto</div>
					<div class="title-two">Editorial</div>
				</div>
				<div class="button-contact">
					<a href="mailto:contacto@mujerypunto.com">contacto@mujerypunto.com</a>
				</div>
			</div>	
		</div>

		<div class="sidebar-box-one contacto-banner">
			<div class="inside-contact contacto-publicitario">
				<div class="title-contact">
					<div class="title-one">Contacto</div>
					<div class="title-two">Publicitario</div>
				</div>
				<div class="button-contact">
					<a href="mailto:asepulveda@mediatrends.cl?subject=Contacto comercial MyP&cc=hugo@mediatrends.cl">asepulveda@mediatrends.cl</a>
				</div>
			</div>
		</div>

   <?php } ?>
    
</aside>
<!-- /sidebar -->
