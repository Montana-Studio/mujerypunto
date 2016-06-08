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


	</head>
	<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=828462330630430";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

		<div class="search-section">
			<div class="search-content">
				<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
					<div class="search-content">
						<div class="cerrar-search" id="sect-search-close">Cerrar <i class="fa fa-close"></i></div> 
						<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Para buscar presiona Enter', 'html5blank' ); ?>">
						<!--button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button-->
					</div> 
				</form>
			</div>
			<div class="search-bg"></div>
		</div>
		<?php  //if(wp_is_mobile()){ ?>
			<div class="menu-mobile-open">
				<div class="logotipo-mujerypunto">
					<a href="<?php echo get_site_url(); ?>">
						<?php 
							if(is_page('belleza')){
								echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo-morado.png" alt="Logo mujer y punto" class="logo-mujer-y-punto">';
							}else {
								echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo.png" alt="Logo mujer y punto" class="logo-mujer-y-punto">';
							}
						?>  
					</a>
				</div> 
				<div class="icon-search-menu search-btn">
					<i class="fa fa-search"></i>
				</div>
				<div class="menu-header-mobile">
					<?php html5blank_nav(); ?>
				</div>
			</div>
		<?php// } ?>
		<div class="wrapper move-content-out">

			<header class="header clear" role="banner">

					<div class="menu-header">
						<div class="logotipo-mujerypunto">
							<a href="<?php echo get_site_url(); ?>">
								<?php 
									if(is_page('belleza')){
										echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo-morado.png" alt="Logo mujer y punto" class="logo-mujer-y-punto">';
									}else {
										echo '<img src="' .get_template_directory_uri(). '/img/myp_logotipo.png" alt="Logo mujer y punto" class="logo-mujer-y-punto">';
									}
								?> 
							</a>
						</div>
						<div class="icon-menu">
							<i class="fa fa-bars"></i>
						</div>
					</div>

					<nav class="navigation-header" role="navigation">
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
					
