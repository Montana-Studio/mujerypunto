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
    function ingresa_usuario_newsletter(){
        var nombre= $('#nombre_newsletter').val();
        var correo= $('#correo_newsletter').val();
        $.ajax({
            type: 'POST',
            url: 'wp-content/themes/mujerypunto/newsletter.php',
            data: 'nombre='+nombre+'&correo='+correo,
            success: function(data){
                if(data==='exito'){
                    $('.newsletter-footer form').hide().fadeOut(); 
                    $('.newsletter-footer .bajada-news').replaceWith('<div class="exito-form">¡Gracias por registrarte en Mujer y Punto! Pronto recibirás más información</div>');
                }else{
                    $('.newsletter-footer form').hide().fadeOut(); 
                    $('.newsletter-footer .bajada-news').replaceWith('<div class="exito-form">¡Ha ocurrido un error! vuelve a intentarlo</div>');
                }
            }
        });
        return false; 
    }
    $('#myp-newsletter').on('click',function(){
        ingresa_usuario_newsletter();
    });	
});


(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=932994110103491";
	  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function fbShare(url, title, descr, image, winWidth, winHeight) {
	var winTop = (screen.height / 2) - (winHeight / 2);    
	var winLeft = (screen.width / 2) - (winWidth / 2); 
    FB.ui({
	    method: 'share',
	    mobile_iframe: true,
	    href: 'https://www.facebook.com/dialog/share?s=100&app_id=932994110103491&display=popup&title='+title+'&summary='+title+'&href='+url+'&pimages[0]='+image+'',
	  }, function(response){});
}

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