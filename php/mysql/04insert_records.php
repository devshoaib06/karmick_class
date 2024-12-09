<?php
include_once('01connect.php');

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Shubham', 'Dasgupta', 'subhamdasgupta@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
