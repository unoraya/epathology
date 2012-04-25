$(document).ready(function(){


/* slider image hover effect */	
$('#tabsmallss li img').animate({opacity: 0.3}, "slow");
	$('#tabsmallss li img').hover(function() {
		$(this).animate({opacity: 1}, "slow");
		}, function() {
	$(this).animate({opacity: 0.3}, "slow");
});


/* line posts hover */
$('ul.bigtips li,ul.smalltips li').hover(function() {
	$(this).find('img')
		.animate({
			opacity: '0.2', 	
		}, 400); 
	$(this).find('p')
		.animate({
			opacity: '1', 	
		}, 600); 

	} , function() {
	$(this).find('img')
		.animate({
 			opacity: '1',  
		}, 800);
	$(this).find('p')
		.animate({
			opacity: '0', 	
		}, 600); 
});


/* end line posts hover */

$('.item_full img,.item_full2 img').hover(function() {
	$(this).animate({opacity: 0.15}, "normal");
	}, function() {
	$(this).animate({opacity: 1}, "normal");
	}); 


$('.item_plain').hoverIntent(function() {
	$(this).css({});
	$(this).find('.folioinfo')
		.animate({
			opacity: '1',	
		}, 400); 
	$(this).find('img')
		.animate({
			opacity: '0.6', 	
		}, 400); 

	} , function() {
	$(this).css({}); 
	$(this).find('.folioinfo')
		.animate({
			opacity: '0',
		}, 800);
	$(this).find('img')
		.animate({
			opacity: '1', 	
		}, 400); 
});


/*slider headings hover */

$('.panel').hoverIntent(function() {
	$(this).css({}); /*Add a higher z-index value so this image stays on top*/ 
	$(this).find('.thumb-title')
		.animate({
			top: '50px', 	
		}, 500); 

	} , function() {
	$(this).css({}); /* Set z-index back to 0 */
	$(this).find('.thumb-title')
		.animate({
			top: '-105px', 

		}, 800);


});






	/* Resize too large images */
	var size = 598;
	var image = jQuery('.entry img');
	
	for (i=0; i<image.length; i++) {
		var bigWidth = image[i].width;
		var bigHeight = image[i].height;
	
		if (bigWidth > size) {	
			var newHeight = bigHeight*size/bigWidth;
			image[i].width = size;
			image[i].height = newHeight;
		}
	}


});
