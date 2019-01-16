/*============MENU BUTTON============*/
jQuery(document).ready(function($){

	/* prepend menu icon */
	$('#nav-wrap').prepend('<div id="menu-icon" class="shinyButton1 greyButton"><div class="glare"></div><div id="buttontext">Select a Page...</div></div>');
	
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("#nav").slideToggle();
		$(this).toggleClass("active");

		var text = $('#buttontext').text();
    $('#buttontext').text(
        text == "Collapse Menu" ? "Select a Page..." : "Collapse Menu");

	});

});
/*============END MENU BUTTON============*/

/*============AVAILABLE BUTTON============*/
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
/*============END MENU BUTTON============*/


/*============TOGGLE SIDE LINKS============*/
$(document).ready(function(){

	$("ul.subnav").parent().prepend("<span></span>"); 
	$("ul.sidenav li span").toggle(function() { 
	$(this).parent().find("ul.subnav").slideDown(); 
	$(this).toggleClass("down");
	}, function(){	
	$(this).parent().find("ul.subnav").slideUp('slow'); 
	$(this).removeClass("down");
});

});

/*============END TOGGLE SIDE LINKS============*/

/*============EQUAL HEIGHT============*/
$(function(){
  var viewPortWidth = $(window).width();

  if (viewPortWidth > 842) {$('#firstthing').addClass('lblock')}
});



/*============EQUAL HEIGHT============*/

/*$(document).ready(function() {
    var minHeight1 = $('.lblock').height();
    $('.largebox .boxnav').css({'height':minHeight1});
});

$(document).ready(function() {
    var minHeight2 = $('.mblock').height();
    $('.mediumbox .boxnav').css({'height':minHeight2});
});*/

/*============END EQUAL HEIGHT============*/