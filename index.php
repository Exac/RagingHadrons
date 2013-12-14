<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/main.css">
<meta http-equiv="Refresh" content="120">
<meta name="viewport" content="width=device-width">
<title>Raging Hadrons Professional Gaming</title>
</head>

<body>
<header>
	<a href="/"><img id="logo" src="/css/img/logo.png" alt="Raging Hadrons Professional Gaming"  /></a>
    <div class="togglemenu">Menu</div>
    <ul id="links">
    	<li>News</li>
    	<li>Forum</li>
    	<li>Streams<span id="stream_count">0</span></li>
    	<li>Store</li>                        
    </ul>
    <div class="togglegames">Games</div>
    <ul id="games">
    	<li class="small sc2logo" title="Starcraft 2"></li>
    	<li class="small dota2logo" title="DOTA 2"></li>
    	<li class="small lollogo" title="League of Legends"></li>
    	<li class="small bf4logo" title="Battlefield 4"></li>
        <!--<li class="small wslogo" title="Wildstar"></li>-->
	</ul>                            
</header>
<div id="maingrid">
<section id="jumbotron" class="full" style="background-image:url('/css/img/featured.jpg');">
	<div class="featured_article">
		<div class="excerpt">
        	<span class="postdate">November 26, 2013</span>
        	<p>This week's WCS qualifier saw no suprises. Fan-favourite Naniwa continues to hang onto his 16<sup>th</sup> place. With only a week to go until the World Championships, things are heating up fast...</p>
        </div>
        <h1>
        WCS Europe Challenger League Group F</h1>
    </div>
</section>
<div class="row">
<section id="recent_posts" class="quarter ll">
	<div class="dal"></div>
	<h2>Recent Posts</h2>
    <ul>
    	<li><a href="">Is it “wrong” to enjoy anime in the west?</a></li>
		<li><a href="">Top 3 Junglers to master climb from Diamond II</a></li>
		<li><a href="">Do you have a favourite number?</a></li>
		<li><a href="">Equality Minister says rape victims can be equally responsible.</a></li>
    </ul>
</section>
<section id="news" class="half ll">
	<div class="d3"></div>
	<h2>News</h2>
    <ul>
    	<li><a href="">WCS Europe Challenger League Group F Results</a></li>
		<li><a href="">BlizzCon Calendar</a></li>
		<li><a href="">1 Month Count-Down to Worlds</a></li>
		<li><a href="">Taeja wins $20,000 in Korea</a></li>
		<li><a href="">CocaCola Gaming giveaway with Raging Hadrons</a></li>
		<li><a href="">LOL World championships Analysis</a></li>
		<li><a href="">Patch 5.4 changes to arena meta by RH.KillDynamite</a></li>
		<li><a href="">Candy Crush level 64 TIPs from RH.Epuration</a></li>
    </ul>
</section>
<section id="streams" class="quarter ll" onClick="getStreamList()">
	<div class="sc2"></div>
	<h2>Streams</h2>
    <ul>
    </ul>
</section>
</div>
<div class="row">
<section id="about" class="half">
	<div class="bdlds2"></div>
	<h2>About</h2>
    <p>Raging Hadrons was founded as a Starcraft II team by six professional World of Warcraft players in 2008. Now, with a roster of 26 professional gamers spanning four games Raging Hadrons is one of the top North American teams.</p>
</section>
<section id="roster" class="half">
	<div class="d2"></div>
	<h2>Roster</h2>
    <ul>
    	<li>Epuration</li>
        <li>Exac</li>
        <li>Killdynamite</li>
        <li>ToySoldier</li>
        <li>Valendrian</li>
        <li>Zeffeus</li>
        <li>LordPsychoMaster</li>
    </ul>
</section>
</div>
</div>
<footer>
 <span>&copy; <?php echo Date("Y"); ?> Raging Hadrons </span>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.1.min.js"><\/script>')</script> 
<script src="/js/Twitch.min.js"></script>
<script src="/js/main.js"></script>
<script>
  Twitch.init({clientId: 'do17chojf6qhk12fjqnxlcgfzd1aeot'}, function(error, status) {
    //twitch client loaded
	getStreamList();
  });
</script>
</body>
</html>