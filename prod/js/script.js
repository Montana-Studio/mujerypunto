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


