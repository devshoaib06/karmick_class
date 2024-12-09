<?php
session_start();

$_SESSION['name'] = "Suvam Dasgupta";
$_SESSION['course'] = "PHP";
$_SESSION['status'] = "Ongoing";

echo $_SESSION['name'];
echo $_SESSION['course'];
echo $_SESSION['status'];
