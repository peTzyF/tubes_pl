<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_websitep";

if (!$conf =mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){

    die("failed to connect!");
}

?>