$( document ).ready(function() {
	$('.icon-menu').click(function(){
		$('.icon-menu').toggleClass('icon-white');   
		$('.wrapper-focus-out').toggleClass('open-focus-out');   
		$('.wrapper').toggleClass('move-content move-content-out');
	}); 

	$('.icon-search-menu').click(function(){
		$('.search-section').toggleClass('show-search');  
	});
});