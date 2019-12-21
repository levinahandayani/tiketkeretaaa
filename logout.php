<?php 
@session_start();

session_destroy();

header("location: /TiketKereta2/login.php");

?>