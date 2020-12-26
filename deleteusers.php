<?php
session_start();

$username_to_be_deleted=$_GET['theusername'];
unset($_SESSION['registeredusersarray'][$username_to_be_deleted]);
header("location:admin_page.php");

?>