<style type="text/css" scoped>
ul.post_preview{
	margin:41px auto 0px;
	max-width:855px;
	list-style-type:none;
	padding-left:0px;
}
.post_preview li{
	display:inline-block;
	position:relative;
	background-color:#2a191b;
	opacity:0.75;
	border:1px solid rgb(48,48,48);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	height:140px;
	overflow:hidden;
	width:30%;
	margin:2px;
	padding-top:10px;
}
.post_preview li:hover,
.post_preview li:focus,
.post_preview li:active{
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QjJFQjZDMjMzRDQ0MTFFMzhFRDZDM0Y1QjNFNTYxN0IiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QjJFQjZDMjQzRDQ0MTFFMzhFRDZDM0Y1QjNFNTYxN0IiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCMkVCNkMyMTNENDQxMUUzOEVENkMzRjVCM0U1NjE3QiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCMkVCNkMyMjNENDQxMUUzOEVENkMzRjVCM0U1NjE3QiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvQq+s8AAAAPSURBVHjaYpipy54GEGAAA2QBNEGxPVIAAAAASUVORK5CYII=);
}
.post_preview a{
	position:absolute;
	width:100%;
	height:100%;
	line-height:0px;
	margin:-10px 0px;
	transition-delay:all 0s;
	outline-width:thick;
}
.post_preview .post_name{
	display:block;
	width:100%;
	color: rgb(184, 184, 184);
	font-family: "armwrestlerbold",sans-serif;
	font-size: 18px;
	text-transform: uppercase;
	padding:0px 0px 0px 2px;
	text-align:center;
}
.post_preview li .excerpt,
.post_preview li .age{
	color:#a68c7a;
	font-size:0.85em;
	padding:0px 2px;
}
.post_preview .age{
	display:block;
	font-size:0.6em !important;
	text-align:center;
	margin-top:11px;
}
.next{
	float:right;
}
.error {
	background-color:#2a191b;
	opacity:0.75;
	border:1px solid rgb(48,48,48);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	padding:8px 12px;
}
</style>
<a class="button previous" <?php echo $previous_enabled; ?> href="<?php echo $previous; ?>">Previous</a>
<a class="button next"  href="<?php echo $next; ?>">Next</a>
<?php echo $post_list_data;?>