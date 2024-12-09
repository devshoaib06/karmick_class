<?php
session_start();

echo "My name is "  . $_SESSION['name'] . ".<br>";
echo "My course is "  . $_SESSION['course'] . ".";
echo "My course Status "  . $_SESSION['status'] . ".";
