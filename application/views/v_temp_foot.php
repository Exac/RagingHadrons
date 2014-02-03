<?php if(isset($center)){if($center){echo '</div>';}} ?>
<footer>
	<span>&copy; <?php echo Date("Y"); ?> Raging Hadrons </span> 
	<?php if (!$this->ion_auth->logged_in()): ?>
	<a href="/auth/login">Login</a>
	<?php else: ?>
	<a href="/auth/logout">Logout</a>
	<?php endif; ?>
	<a href="">Register</a>
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