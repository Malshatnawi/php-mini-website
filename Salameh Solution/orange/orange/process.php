<?php
session_start();

if()
$_SESSION['feras'][] = 1;
$_SESSION['feras'][] = 2;

echo '<pre>';
print_r($_SESSION);

die;

unset($_SESSION['id']);

print_r($_SESSION['id']);

 ?>