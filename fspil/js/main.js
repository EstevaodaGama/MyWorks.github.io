//off canvas menu
var $page = $('.page');
var $nav = $('.offMenu');
$('.menu_toggle').on('click', function() {
	$page.toggleClass('shazam'); //add class thet open the menu
	$nav.toggleClass('nav_shazam'); //add class thet show menu btn
})
$('.page').on('click', function() {
	$page.removeClass('shazam');
	$nav.removeClass('nav_shazam');
});

//floating action button
$(document).ready(function(){
	$('.fixed-action-btn').floatingActionButton();
});

//collapsible
$(document).ready(function(){
	$('.collapsible').collapsible();
});