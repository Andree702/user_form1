<?php
//error_reporting(0);
session_start();
require 'config.php';
$conn = mysqli_connect(HOST,USER,PASSWORD) or die("nono");
mysqli_select_db($conn,DATABASE) or die("nionoooon");
?>