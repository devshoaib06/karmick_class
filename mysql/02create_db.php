<?php

include_once("01connect.php");

// Create database
$sql = "CREATE DATABASE demoDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
