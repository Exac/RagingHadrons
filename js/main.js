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
$(".row section:first-child").css('margin-left', '0px');

//make sections in a .row the same height above 550px wide
function normalizeRowHeight() {
	if($(".row").width() >= 550 ){
		var rowHeight = 0;
		$(".row").each(function(index, v) {
			rowHeight = 0;
			$(v).children("section").each(function(i, e) {
				if($(e).height() > rowHeight){
					rowHeight = $(e).height();
				}
				
			});
			$(v).children("section").css('height', rowHeight + 2);
		});	
	}
	console.log("normalizeRowHeight()");
	checkStreamZero();
}
//normalizeRowHeight();

$.ajax({
	beforeSend: function(){
	},
	complete: function(){
		console.log("ajax.complete, # of streams: " + $("#streams ul > li").size());
		checkStreamZero();
		normalizeRowHeight();
	}
});

//hide stream-count if zero
function checkStreamZero() {
	console.log("checkStreamZero(), # of streams: " + $("#streams ul > li").size());
	var numStreams = $("#streams ul > li").size();
	$(".stream_count").html(numStreams);
	if($(".stream_count").html() == "0"){
		$(".stream_count").hide();
	}else{
		$(".stream_count").show();
	}
}

//Get list of active Twitch streams
function getStreamList() {
	console.log("getStreamList()");
	
	xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
		if (xml.readyState==4 && xml.status==200) {
			$("#streams ul").append(xml.responseText);
		}
	}
	xml.open("GET", "/ajax/default.php?streamlist=true&streamlist_type=li", true);
	xml.send();
}