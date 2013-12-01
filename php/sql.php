<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/php/sql_secret.php");

mysql_connect("raginghadrons.db.10405771.hostedresource.com", 
				  "raginghadrons", 
				  $sqlpw);
mysql_select_db("raginghadrons");
?>