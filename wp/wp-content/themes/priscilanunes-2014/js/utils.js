$(function() {
	console.log("oi!");
	$('.bxslider-banner').bxSlider({
	  nextSelector: '#control_next',
	  prevSelector: '#control_prev',
	  auto: true,
	  pager: false,
	  mode: 'horizontal',
	  pause: 8000
	});

})