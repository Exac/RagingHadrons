<style type="text/css" scoped>
	.mainnews{
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		width:100%;
		min-height:100%;
		position:relative;
		z-index:1;
		padding:200px 0px;
	}
	.mainnews h1{
		padding-top:0px;
		margin-top:-200px;
		font-size:3em;
		color:#ffffff;
		position:absolute;
		width:100%;
		height:100%;
		text-align:center;
		z-index:1;
		/*background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QjJFQjZDMjMzRDQ0MTFFMzhFRDZDM0Y1QjNFNTYxN0IiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QjJFQjZDMjQzRDQ0MTFFMzhFRDZDM0Y1QjNFNTYxN0IiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCMkVCNkMyMTNENDQxMUUzOEVENkMzRjVCM0U1NjE3QiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCMkVCNkMyMjNENDQxMUUzOEVENkMzRjVCM0U1NjE3QiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvQq+s8AAAAPSURBVHjaYpipy54GEGAAA2QBNEGxPVIAAAAASUVORK5CYII=);*/
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTYzMkFERUU2Q0YyMTFFMzk5ODg5MjhBMjhBOTVEQzYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTYzMkFERUY2Q0YyMTFFMzk5ODg5MjhBMjhBOTVEQzYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNjMyQURFQzZDRjIxMUUzOTk4ODkyOEEyOEE5NURDNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNjMyQURFRDZDRjIxMUUzOTk4ODkyOEEyOEE5NURDNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjEOHn0AAAAPSURBVHjaYgiW4noAEGAAApMBWMgy3q0AAAAASUVORK5CYII=);/* #521a0a 80% */
	}
	.mainnews article{
		position:relative;
		margin:0px auto;
		padding:0px 0px 0px 0px;
		max-width:855px;
		top:0px;
		bottom:0px !important;
		z-index:30 !important;
		border:1px solid rgb(48, 48, 48);
		background-color:rgb(42,25,27);
		background-color:rgba(42,25,27,0.75);
		-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		opacity:1.0 !important;
	}
	.mainnews article p{
		padding:6px;
	}
	.mainnews .author{
		position:relative;
		background-image:url('/css/img/news_author.jpg');
		background-position:center;
		height:186px;
		display:block;
		border-top:1px solid rgb(48,48,48);
	}
	.mainnews .author .author_avatar{
		width:173px;
		height:173px;
		position:relative;
		top:3px;
		left:50%;
		margin-left:-86px;
		text-align:center;
		background-color:rgb(20,20,20);
		border:2px solid rgb(48,48,48);
		z-index:5;
	}
	.mainnews .author .author_avatar:after{
		display:block;
		position:absolute;
		content:'after';
		top:0px;
		left:0px;
		right:0px;
		bottom:0px;
		width:173px;
		height:173px;
		z-index:7 !important;
		background:white;
		color:red;
		-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		outline:1px solid green;
	}
	.author_name,
	.author_tag{
		background-color:rgb(48,48,48);
		position:absolute;
		top:70px;
		height:30px;
		width:150px;
		line-height:30px;
		font-size:15px;
		font-family:"armwrestlerbold",sans-serif;
		color:#ffffff;
		-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		z-index:4;
	}
	.author_name{
		right:60%;
		padding-left:2px;
	}
	.author_tag{
		left:60%;
		text-align:right;
		padding-right:2px;
	}
	
</style>
<section class="mainnews" style="background-image:url('<?php echo $featured_image; ?>')">
	<h1><?php echo $title; ?></h1>
	<article>
		<?php echo $article; ?>
		<div class="author">
			<img class="author_avatar" src="<?php echo $author_avatar; ?>" alt="<?php echo "{$author_name}'s avatar."; ?>" />
			<span class="author_name"><?php echo $author_name; ?></span>
			<span class="author_tag">&lt;<?php echo $author_tag; ?>&gt;</span>
		</div>
	</article>
</section>