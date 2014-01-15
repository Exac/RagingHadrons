<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if(!
        isset($title)){echo "Raging Hadrons Professional Gaming";}else{echo $title;} ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/main.css">
        
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>

<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	
<header> <a href="/"><img id="logo" src="/css/img/logo.png" alt="Raging Hadrons Professional Gaming"  /></a>
  <div class="togglemenu">Menu</div>
  <ul id="links">
    <li><a href="/news/">News</a></li>
    <li><a href="/forum/">Forum</a></li>
    <li><a href="/streams/">Streams</a><span id="stream_count">0</span></li>
    <li><a href="/store/">Store</a></li>
  </ul>
  <div class="togglegames">Games</div>
  <ul id="games">
    <li class="small sc2logo" title="Starcraft 2"><a href="/game/starcraft2"></a></li>
    <li class="small dota2logo" title="DOTA 2"><a href="/game/dota2"></a></li>
    <!-- <li class="small lollogo" title="League of Legends"><a href="/game/lol"></a></li> -->
    <li class="small bf4logo" title="Battlefield 4"><a href="/game/battlefield4"></a></li>
    <li class="small wslogo" title="Wildstar"><a href="/game/wildstar"></a></li> 
    <!--<li class="small sclogo" title="Star Citizen"><a href="/game/starcitizen"></a></li>-->
  </ul>
</header>
<div class="techbar">
  <div class="r"></div>
  <div class="l"></div>
  <div id="drapes"></div>
</div>
<?php if(isset($center)){if($center){echo '<div class="main_frame">';}} ?>