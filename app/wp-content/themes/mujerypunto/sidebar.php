<!-- sidebar -->
<aside class="sidebar-content">
    <div class="sidebar_300x250">
		<ins data-revive-zoneid="6" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="bc4ce818c158f7a81a7acefab7a0e36a"></ins>
		<script async src="//bloques.mujerypunto.com/activos/www/mtnetd/asyncjs.php"></script>
	</div>
    <?php if(is_single()&&!in_category('sexualidad')){ ?> 
        <div class="sidebar_300x250">

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- mujer y punto interior 1 final -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:300px;height:250px"
				 data-ad-client="ca-pub-9947251232337904"
				 data-ad-slot="5997850272"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
            
        </div>
    <?php } ?>

    <?php if(is_single()&&wp_is_mobile()) { ?>

		<div class="box-sidebar">
			<div class="title-sidebar"><i class="fa fa-star-o"></i> Lo más popular</div>
			<div class="content-sidebar">
	    		<?php get_template_part('loop-sidebar-one'); ?> 
	    	</div>
		</div>

		<div class="box-sidebar imperdibles-sidebar">
			<div class="title-sidebar"><i class="fa fa-star-o"></i> Imperdibles M&P</div>
			<div class="content-sidebar">
	    		<?php get_template_part('loop-sidebar-two'); ?> 
	    	</div> 
		</div> 

		<div class="sidebar-box-one">
			<a href="<?php echo get_site_url();?>/category/radio-mujer-y-punto/">
				<img src="<?php echo get_template_directory_uri();?>/img/banner-podcast.gif" alt="podcast mujer y punto">
			</a>
		</div>

		<div class="sidebar-box-one">
			<a href="<?php echo get_site_url();?>/category/radio-mujer-y-punto/"> 
				<img src="<?php echo get_template_directory_uri();?>/img/banner-consulta-psicologica.jpg" alt="podcast mujer y punto">
			</a>
		</div>

		<div class="sidebar-box-one contacto-banner ">
			<div class="inside-contact contacto-editorial">
				<div class="title-contact">
					<div class="title-one">Contacto</div>
					<div class="title-two">Editorial</div>
				</div>
				<div class="button-contact">
					<a href="mailto:contacto@mujerypunto.com">Contacto</a>
				</div>
			</div>	
		</div>

		<div class="sidebar-box-one contacto-banner ">
			<div class="inside-contact contacto-publicitario">
				<div class="button-contact">
					<a href="mailto:aseulveda@mediatrends.cl?subject=Contacto comercial MyP&cc=hugo@mediatrends.cl">Contacto</a>
				</div>
				<div class="title-contact">
					<div class="title-one">Contacto</div>
					<div class="title-two">Publicitario</div>
				</div>	
			</div>
		</div>


    <?php }else {?>

		<div class="box-sidebar">
			<div class="title-sidebar"><i class="fa fa-star-o"></i> Lo más popular</div>
			<div class="content-sidebar">
	    		<?php get_template_part('loop-sidebar-one'); ?> 
	    	</div>
		</div>

		<div class="facebook-sidebar">
			<?php 
				if(is_page('belleza')){
					echo 'belleza';
				}else {
					echo '<div class="fb-page" data-href="https://www.facebook.com/mujerypunto" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>';
				}
			?> 	 
		</div>

		<div class="box-sidebar twitter">
			<div class="title-sidebar"><i class="fa fa-twitter"></i> Tweets</div>
			<div class="content-tweet">
				<a class="twitter-timeline"  href="https://twitter.com/mujerypunto" data-chrome="nofooter noheader" height="400"></a>
	            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>

		<div class="box-sidebar instagram">
			<div class="title-sidebar"><i class="fa fa-instagram"></i> Instagram</div>
			<div class="list-instagram ">
				<ul>
					<?php get_template_part('instagram'); ?> 
				</ul>
			</div>	 
		</div>

		<div class="box-sidebar imperdibles-sidebar">
			<div class="title-sidebar"><i class="fa fa-star-o"></i> Imperdibles M&P</div>
			<div class="content-sidebar">
	    		<?php get_template_part('loop-sidebar-two'); ?> 
	    	</div> 
		</div> 

		<div class="sidebar-box-one">
			<a href="<?php echo get_site_url();?>/category/radio-mujer-y-punto/">
				<img src="<?php echo get_template_directory_uri();?>/img/banner-podcast.gif" alt="podcast mujer y punto">
			</a>
		</div>

		<div class="sidebar-box-one">
			<a href="<?php echo get_site_url();?>/category/radio-mujer-y-punto/"> 
				<img src="<?php echo get_template_directory_uri();?>/img/banner-consulta-psicologica.jpg" alt="podcast mujer y punto">
			</a>
		</div>

		<div class="sidebar-box-one contacto-banner ">
			<div class="inside-contact contacto-editorial">
				<div class="title-contact">
					<div class="title-one">Contacto</div>
					<div class="title-two">Editorial</div>
				</div>
				<div class="button-contact">
					<a href="mailto:contacto@mujerypunto.com">Contacto</a>
				</div>
			</div>	
		</div>

		<div class="sidebar-box-one contacto-banner ">
			<div class="inside-contact contacto-publicitario">
				<div class="button-contact">
					<a href="mailto:aseulveda@mediatrends.cl?subject=Contacto comercial MyP&cc=hugo@mediatrends.cl">Contacto</a>
				</div>
				<div class="title-contact">
					<div class="title-one">Contacto</div>
					<div class="title-two">Publicitario</div>
				</div>	
			</div>
		</div>

   <?php } ?>
    
</aside>
<!-- /sidebar -->
