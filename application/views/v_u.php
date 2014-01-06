<style type="text/css" scoped="scoped">
.profile{
	position:relative;
	max-width:855px;
	margin:0px auto;
}
.profile .username{
	text-align:center;
	font-size:3em;
}
.profile .tag{
	display:block;
	text-align:center;
}
.profile .bio{
	display:block;
	position: relative;
	margin: 4em auto;
	padding: 0px;
	width:50%;
	max-width: 855px;
	min-height:4em;
	top: 0px;
	bottom: 0px !important;
	z-index: 30 !important;
	border: 1px solid rgb(48, 48, 48);
	background-color: rgba(42, 25, 27, 0.75);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	opacity: 1 !important;
}
.sky{
	z-index:-1;
	position:absolute;
	top:150px;
	background:none;
	bottom:0px;
	width:100%;
	min-height:90%;
	display:block;
}
.cloud{
	z-index:-1;
	position:absolute;
	opacity:0.5;
	height:50px;
	width:50px;
}
</style>
<div class="profile">
	<h1 class="username"><?php echo $username; ?></h1>
	<span class="tag"><?php echo $tag; ?></span>
	<span class="bio">
		User's bio:<br/>
		<?php echo $bio; ?>
	</span>
</div>
<p>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</p>
<p>&nbsp; </p>
<script type="text/javascript" defer>
	$("body").append("<div class='sky'></div>");
		
	setInterval(sky_update, '500');//run every half second
	
	function Cloud (x,y) {
		this.opacity = 1.0;
		this.x = x;
		this.y = y;
		this.size = 50;//50px * 50px
	}
	var cloud = new Cloud(0,0);
	
	function Sky (w,h) {
		this.w = w;
		this.h = h;
	}
	Sky.prototype.rows = function(){
		var Cld = new Cloud(0,0);
		return Math.floor(this.h / Cld.size);
	}
	Sky.prototype.cols = function(){
		var Cld = new Cloud(0,0);
		return Math.floor(this.w / Cld.size);
	}
	var sky = new Sky($(".sky").height(), $(".sky").width());
	
	var arr = new Array(new Array());
	
	for(w=0; w<sky.cols(); w++){
		
	}
	
	var changed = false;
	$(window).resize(function(){
		sky.w = $(this).width();
		sky.h = $(this).height();
		changed = true;
	});
	
	function add_cloud(x,y,opacity)
	{
		
	}
	
	function sky_create() {
		$(".sky").empty();
		for(var y=0; y < sky.rows(); y++){
			arr[y] = [];
			for(var x=0; x < sky.cols(); x++){
				var opac = Math.abs(Math.random() - 0.5);
				arr[y][x] = opac;
				$(".sky").append("<img class='cloud' data-x='"+x+"' data-y='"+y+"' style='left:"+(x*cloud.size)+"px;top:"+(y*cloud.size)+"px;opacity:"+opac+";' alt='' src='<?php echo $avatar; ?>' />");
			}
		}
	}
	
	function sky_update() {
		if(changed){
			sky_create();
			changed = false;
		}
		var o = 0;
		for(var y=0; y < sky.rows(); y++){
			for(var x=0; x < sky.cols(); x++){
				
				$('.cloud[data-x='+x+'][data-y='+y+']').css('opacity', '1.0');
			}
		}
	}
	
	sky_create();
	</script>
