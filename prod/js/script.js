var mySwiper;

$( document ).ready(function() {
	$('.icon-menu').click(function(){
		$('.icon-menu').toggleClass('icon-white');   
		$('.wrapper-focus-out').toggleClass('open-focus-out');   
		$('.wrapper').toggleClass('move-content move-content-out');
	}); 

	$('.icon-search-menu').click(function(){
		$('.search-section').toggleClass('show-search');  
	});

	mySwiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationType: 'bullets',
		paginationClickable: true,
		autoplay: 4000,
		loop: true,
		slidesPerView: 3,
		spaceBetween:0,
		breakpoints: {
		640: {
		  slidesPerView: 1,
		  spaceBetweenSlides:0
		}
		}

	}); 

});


function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2); 
    window.open('http://www.facebook.com/sharer.php?s=100&p[title]='+title+'&p[summary]='+title+'&p[url]='+url+'&p[images][0]='+image,'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight+'');
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