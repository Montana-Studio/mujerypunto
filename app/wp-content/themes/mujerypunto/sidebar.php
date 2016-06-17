<!-- sidebar -->
<aside class="sidebar-content">

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
			<a class="twitter-timeline"  href="https://twitter.com/mujerypunto" data-chrome="nofooter noheader"></a>
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

</aside>
<!-- /sidebar -->
