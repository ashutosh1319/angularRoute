<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","ng_test");

$dblink = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Error in connection to the database");

?>