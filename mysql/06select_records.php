<?php
include_once('01connect.php');

$sql = "SELECT id, firstname, lastname FROM MyGuests where id = 3";
$result = mysqli_query($conn, $sql);
// echo "<pre>";
// print_r($result);
// die;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
