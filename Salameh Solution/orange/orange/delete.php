<?php
session_start();

$key = $_GET['key'];

unset($_SESSION['admin']["$key"]);
header("location:admin.php");
 ?>