<?php
include_once('01connect.php');


$sql = "DELETE FROM MyGuests";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
