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
});
function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2); 
    window.open('https://www.facebook.com/dialog/share?app_id=932994110103491&title='+title+'&summary='+title+'&href='+url+'&pimages[0]='+image,'sharer&top=' + winTop + '&left=' + winLeft + '&toolbar=0&status=0&width=' + winWidth + '&height=' + winHeight+'');
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