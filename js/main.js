//RESPONSIVE under 550px width, games menu:
//TOGGLECLICK, extends jQuery
$.fn.toggleClick = function(){
    var functions = arguments ;
    return this.click(function(){
            var iteration = $(this).data('iteration') || 0;
            functions[iteration].apply(this, arguments);
            iteration = (iteration + 1) % functions.length ;
            $(this).data('iteration', iteration);
    });
};$(".togglegames").toggleClick(function() {
	$("#games, #games li").fadeIn();
	$("#links, #links li").fadeOut();
	$(".togglegames").addClass('dd');
}, function() {
	$("#games, #games li").fadeOut();
	$("#links, #links li").fadeOut();
	$("header .togglegames").removeClass('dd');
});$(".togglemenu").toggleClick(function() {
	$("#links, #links li").fadeIn();
	$("#games, #games li").fadeOut();
	$(".togglemenu").addClass('dd');
}, function() {
	$("#links, #links li").fadeOut();
	$("#games, #games li").fadeOut();
	$("header .togglemenu").removeClass('dd');
});

//for non-CSS3 compliant browsers
$(".row section:last-child").css('margin-right', '0px');

