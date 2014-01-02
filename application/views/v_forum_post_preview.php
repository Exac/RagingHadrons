<style type="text/css" scoped>
ul.post_preview{
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
	height:180px;
	overflow:hidden;
	width:30%;
	margin:2px;
	padding-top:10px;
}
.post_preview a{
	display:block;
	width:100%;
	color: rgb(184, 184, 184);
	font-family: "armwrestlerbold",sans-serif;
	font-size: 18px;
	text-transform: uppercase;
	padding:0px 0px 0px 2px;
}
.post_preview li .excerpt,
.post_preview li .age{
	color:#a68c7a;
	font-size:0.85em;
}
.post_preview .age{
	display:block;
	font-size:0.6em !important;
	text-align:center;
	margin-top:11px;
}
</style>
<?php echo $post_list;?>