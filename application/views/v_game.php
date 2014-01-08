<style type="text/css" scoped="scoped">
.gamebg{
	height:100%;
	max-height:100%;
	width:100%;
	max-width:100%;
	z-index:-9;
	position:absolute;
	top:0px;
	background-image:url('/css/img/game_bg/<?php echo str_replace(' ', '', $game_name); ?>.jpg');
	background-attachment:fixed;
	background-position:top center;
	background-repeat:no-repeat;
	background-color:#000000;
	margin:149px auto -149px auto;
}
footer{
	position:fixed;
	bottom:0px;
	left:0px;
	right:0px;
	width:100%;
	text-align:center;
}
</style>
<div class="gamebg"></div><!-- gamebg -->
<h1><?php echo $game_name; ?></h1>

