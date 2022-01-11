<?php

error_reporting(0); 

session_start();
 
if (empty($_SESSION['Email'])) {
    header("location: index login.php");
}

?>