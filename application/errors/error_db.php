<!DOCTYPE html>
<html lang="en">
<head>
<title>Database Error</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #000;
	margin: 0px 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: rgb(48, 48, 48);
}

a {
	color: #ffbb99;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color:rgb(184, 184, 184);
	background-color: transparent;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #333333;
	border: 1px solid #4F5155;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid rgb(48, 48, 48);
	-webkit-box-shadow: 0 0 8px #4F5155;
	color:rgb(166, 140, 122);
	background-color:rgba(42, 25, 27, 0.75);
	background-color:rgb(42,25,27);
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<header style="margin:0px auto;display:block; text-align:center;"> <a href="/"><img id="logo" src="/css/img/logo.png" alt="Raging Hadrons Professional Gaming"  /></a></header>
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html>