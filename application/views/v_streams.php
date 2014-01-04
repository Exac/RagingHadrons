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
		z-index:30 !important;
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
	}
</style>
<section class="streambg">
	<section class="streams">
	<?php echo $featured_stream['object']; ?>
	<h1><?php echo $featured_stream['title']; ?></h1>
	<div style="opacity:0.5"><?php echo $featured_stream['object_chat']; ?></div>
	</section>
	<h1></h1>
</section>