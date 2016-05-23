// JavaScript Document
$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Get the caption of the first image from REL attribute and display it
	$('#gallery .caption').html($('#gallery a:first').find('img').attr('rel'));
	$('#gallery .caption').animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow
	gallery();
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current;
	if($("#gallery a.show"))
		current = $("#gallery a.show");
	else 
		current = $("#gallery a:first")
	
	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next;
	if(current.next()){
		if(current.next().hasClass("caption"))
			next = $("#gallery a:first");
		else 
			next = current.next();
	}
	else 
		next = $("#gallery a:first");	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0});
	next.addClass('show');
	next.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000);
	current.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0},0);
	$("#gallery .caption").animate({height: '1px'}, 300);
	
	//Renew and animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').html(caption);
	$('#gallery .caption').animate({opacity: 0.7},0);
	$("#gallery .caption").animate({height: '100px'},500);	
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setTimeout('gallery()',3000);
}
