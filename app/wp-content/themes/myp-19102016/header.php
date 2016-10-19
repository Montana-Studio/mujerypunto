<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<style>
			.wp-caption{
				width:100% !important;
			}
		</style>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66760107-1', 'auto');
          ga('send', 'pageview');

        </script>

	</head>
	<body <?php body_class(); ?>>
		<?php if(wp_is_mobile()){ ?>
		<div class="search-section">
			<div class="search-content">
				<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
					<div class="search-content">
						<div class="cerrar-search" id="sect-search-close">Cerrar <i class="fa fa-close"></i></div> 
						<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Para buscar presiona Enter', 'html5blank' ); ?>">
					</div> 
				</form>
			</div>
			<div class="search-bg"></div>
		</div>
		<div class="menu-mobile-open">
			<div class="logotipo-mujerypunto">
				<a href="<?php echo get_site_url(); ?>">
					<?php 
						if(is_page('belleza')){
							echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo-morado.png" width="150" height="150" alt="Logo mujer y punto" class="logo-mujer-y-punto">';
						}else {
							echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo.png" width="150" height="150" alt="Logo mujer y punto" class="logo-mujer-y-punto">'; 
						}
					?>  
				</a>
			</div> 
			<div class="icon-search-menu ">
				<form class="search-mobile" method="get" action="<?php echo home_url(); ?>" role="search">
					<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar en el sitio', 'html5blank' ); ?>">
					<button class="search-submit" type="submit" role="button"><i class="fa fa-search"></i></button>
				</form>	
			</div>
			<div class="menu-header-mobile">
				<?php html5blank_nav(); ?>
			</div>
		</div>
		<?php } ?>
		<!-- wrapper -->
		<div class="wrapper move-content-out">

			<header class="header clear">

					<div class="menu-header">
						<div class="logotipo-mujerypunto">
							<h1>
								<a href="<?php echo get_site_url(); ?>">
									<?php 
										if(is_page('belleza')){
											echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo-morado.png" width="228" height="110" alt="Logo mujer y punto" class="logo-mujer-y-punto" alt="mujer y punto" title="mujer y punto">';
										}else {
											echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo.png" width="228" height="110" class="logo-mujer-y-punto" alt="Logotipo mujer y punto" title="mujer y punto">';
										}
									?> 
								</a>	
							</h1>
						</div>
						<div class="search-btn">
							<i class="fa fa-search"></i>
						</div>
						<div class="icon-menu">
							<i class="fa fa-bars"></i>
						</div>
					</div>
					
					<nav class="navigation-header">
						<div class="menu-header">
							<?php html5blank_nav(); ?>
						</div>
						<div class="rrss-myp">
							<ul>
								<li><a target="_blank" href="https://www.facebook.com/mujerypunto"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/mujerypunto"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://plus.google.com/+mujerypunto/videos"><i class="fa fa-google"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/mujerypunto/"><i class="fa fa-instagram"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/channel/UC5BJDXtQyzTZzkOXfTzPgrQ"><i class="fa fa-youtube"></i></a></li>
								<li><a class="search-btn"><i class="fa fa-search"></i></a></li>
							</ul>
						</div>
					</nav>

			</header>
			
			<div class="wrapper-focus-out"></div>
