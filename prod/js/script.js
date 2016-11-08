jQuery(document).ready(function($){
	$('.icon-menu').click(function(){
		$('.icon-menu').toggleClass('icon-white');   
		$('.wrapper-focus-out').toggleClass('open-focus-out');   
		$('.wrapper').toggleClass('move-content move-content-out');
		$('.icon-menu i').toggleClass('fa-close fa-bars');  
	}); 

	$('.search-btn').click(function(){
		$('.search-section').toggleClass('show-search');   
	});

	$('.icon-search-menu.search-btn').click(function(){
		$('.icon-menu').toggleClass('icon-white');   
		$('.wrapper-focus-out').toggleClass('open-focus-out');   
		$('.wrapper').toggleClass('move-content move-content-out');
	}); 

	$('#sect-search-close').click(function() {
		$('.search-section').toggleClass('show-search');   
	});

	$('.swiper-gallery').prepend('<div class="title-insidepost">Galería de imágenes</div>');

	$('.abrir-submenu').click(function(){
		$('.sub-menu').slideToggle();
	});

	$('.lazy').lazyload({
	    effect : 'fadeIn',
	   	failure_limit : 5
	});
    
	
	$('#readMorebtn').on('click', function(){
		
		$('#loadAdsContent').css({
			'max-height':'inherit',
			'overflow':'inherit'
		});
		$('#loadAdsContent .degradeload').hide();
	});
	
	/* jshint ignore:start */
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

	var mySwiper = new Swiper('.swiper-container', {
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
	/* jshint ignore:end */


	


	
});


(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)){ return; }
	  js = d.createElement(s); js.id = id;
	  js.src = '//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=932994110103491';
	  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function twShare(url, title, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
	window.open('http://twitter.com/share?url=' + url + '&text=' + title, 'intent', 'left='+ winLeft+',top='+winTop+',width=' + winWidth + ',height=' + winHeight + ',personalbar=0,toolbar=0,scrollbars=0,resizable=0');
}
function piShare(url, title, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('https://pinterest.com/pin/create/button/?url=' + url + '&media=' + image + '&description=' + title +'&left='+ winLeft+'&top='+winTop+'&width=' + winWidth + '&height=' + winHeight);
}
function GoogleShare(url, title, image, winWidth, winHeight) {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
}  