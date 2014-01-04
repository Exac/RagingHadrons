<style type="text/css" scoped="scoped">
	.stream_chat{
		width:100%;
		height:350px;
	}
	.streams{
		position:relative;
		margin:0px auto;
		padding:0px 0px 0px 0px;
		max-width:855px;
		top:0px;
		bottom:0px !important;
		border:1px solid rgb(48, 48, 48);
		background-color:rgb(42,25,27);
		background-color:rgba(42,25,27,0.75);
		-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	}
	.streambg{
		width:100%;
		height:100%;
		background-position:bottom center;
		background-size:cover;
		background-repeat:no-repeat;
		background-image:url(<?php echo $featured_stream['background']; ?>);
		margin-bottom:-100px;
	}
	.other_streams{
		max-width:855px;
		margin:80px auto 0px;
	}
	.other_streams ul{
		margin-left:0px;
		padding-left:0px !important;
	}
	.other_streams:after{
		content:" ";
		float:left;
		display:block;
	}
	.other_streams li{
		display:block;
		border:1px solid rgb(48, 48, 48);
		background-color:rgb(42,25,27);
		background-color:rgba(42,25,27,0.75);
		margin:5px auto;
		position:relative;
		height:90px;
		box-sizing:content-box;
		-moz-box-sizing:content-box;
		background-size:cover;
		background-repeat:no-repeat;
	}
	.other_streams a:hover,
	.other_streams a:focus,
	.other_streams a:active{
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QjJFQjZDMjMzRDQ0MTFFMzhFRDZDM0Y1QjNFNTYxN0IiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QjJFQjZDMjQzRDQ0MTFFMzhFRDZDM0Y1QjNFNTYxN0IiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCMkVCNkMyMTNENDQxMUUzOEVENkMzRjVCM0U1NjE3QiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCMkVCNkMyMjNENDQxMUUzOEVENkMzRjVCM0U1NjE3QiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvQq+s8AAAAPSURBVHjaYpipy54GEGAAA2QBNEGxPVIAAAAASUVORK5CYII=);
	}
	.other_streams img{
		max-height:90px;
		position:absolute;
		left:0px;
	}
	.other_streams span.stream{
		position:absolute;
		left:100px;
		font-size:50px;
		color: rgb(184, 184, 184);
		font-family: "armwrestlerbold",sans-serif;
		text-transform: uppercase;
		line-height:90px;
	}
	.other_streams a.outgoing{
		position:absolute;
		width:100%;
		height:100%;
		margin:0px;
	}
</style>
<section class="streambg">
	<section class="streams">
	<?php echo $featured_stream['object']; ?>
	<h1><?php echo $featured_stream['title']; ?></h1>
	<div style="opacity:0.5"><?php echo $featured_stream['object_chat']; ?></div>
	</section>
	<section class="other_streams">
	<h1>Online Streams</h1>
		<ul>
			<?php
				foreach($streams as $s)
				{
					echo "<li style='background-image:url(\"{$s['ss']}\");'>";
					echo "<span class='stream'>{$s['name']}</span>";
					echo "<img src='{$s['background']}' alt='{$s['name']}'s Stream on Twitch.tv'/>";
					echo "<a class='outgoing' href='http://www.twitch.tv/{$s['name']}'></a>";
					echo "</li>";
				}
			?>
		</ul>
	</section>
</section>