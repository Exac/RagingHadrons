<style type="text/css" scoped>
.post h1.title{
	font-size:3em;
	text-align:center;
}

.post address{
	background:rgb(48,48,48);
	display:block;
	font-style:normal;
	height:2em;
	text-align:center;
	padding-top:4px;
}
.post address img{
	max-height:100%;
}

.post,
.replies{
	max-width:855px;
	margin:0px auto 2px;
	position:relative;
	background-color:#2a191b;
	opacity:0.75;
	font-size:14px;
	border:1px solid rgb(48,48,48);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
}
.replies .comment{
	display:block;
	margin:1px;
	position:relative;
	margin-left:100px;
	border-left:1px solid rgb(48,48,48);
	border-bottom:1px solid rgb(48,48,48);
	min-height:2em;
}
.replies .comment:last-child{
	border-bottom:none;
}
.comment .commenter_name,
.comment .commenter_tag{
	font-size:11px !important;
	position:absolute;
	display:block;
	width:100px;
	left:-100px;
	text-align:center;
}
.comment .commenter_name{
	color:#ffffff;
	bottom:50%;
	font-size:12px;	
}
.comment .commenter_tag{
	top:50%;
	font-size:9px !important;
}

</style>

<section class="post">
	<h1 class="title"><?php echo $title; ?></h1>
	<address title="posted <?php echo $created; ?>">
		<span class="author"><a href="/u/<?php echo $name; ?>"><?php echo $name; ?></a></span>
		<span class="avatar"><img src="/upload/user/<?php echo $avatar; ?>" alt="<?php echo $name; ?>"/></span>
		<span class="tag">&lt;<?php echo $tag; ?>&gt;</span>
	</address>
	<div class="content"><?php echo $content; ?></div>
</section>
<section class="replies">
	<?php foreach($reply as $r){ ?>
		<div class="comment">
			<span class="commenter_name" title="Posted <?php echo $r['posted']; ?>."><a href="/u/<?php echo $r['commenter_name']; ?>"><?php echo $r['commenter_name']; ?></a></span>
			<span class="commenter_tag"><?php echo $r['commenter_tag']; ?></span>
			<span class="content"><?php echo $r['content']; ?></span>
		</div>
	<?php } ?>
</section>