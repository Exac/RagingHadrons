<footer>
	<span>&copy; <?php echo Date("Y"); ?> Raging Hadrons </span> 
	<style type="text/css" scoped="scoped">
		input[type=text],
		input[type=password],
		input[type=submit]{
			background:black;
			border:1px solid rgb(48,48,48);
			color:#ffffff;
			height:16px;
			line-height:16px;
			font-size:12px;
			padding:1px;
			box-sizing:content-box !important;
			-moz-box-sizing:content-box !important;
		}
	</style>
	<form action="/auth/" method="post" class="login">
		<input type="text" name="identity" />
		<input type="password" name="password" />
		<input type="submit" value="login" />
	</form>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script src="/js/Twitch.min.js"></script> 
<script src="/js/main.js"></script> 

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src='//www.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<script defer>
  Twitch.init({clientId: 'do17chojf6qhk12fjqnxlcgfzd1aeot'}, function(error, status) {
    //twitch client loaded
	getStreamList();
  });
</script>
</body>
</html>