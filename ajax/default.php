<?php
if($_SERVER["SERVER_NAME"] != "localhost"){$_SERVER["DOCUMENT_ROOT"] .= "/raginghadrons";}
include_once($_SERVER["DOCUMENT_ROOT"] . "/php/twitch.php");

//detection
if($_GET["streamlist"]){echo get_stream_list();}

?>