$(window).scroll(function(){
	if($(document).scrollTop() > 20){
		$('.navigation').addClass('fix-icon');
	}
	else{
		$('.navigation').removeClass('fix-icon');
	}
});