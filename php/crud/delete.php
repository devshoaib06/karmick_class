<?php
// Include config file
require_once "config.php";


if(!empty($_GET)){
    $id= $_GET['id'];
    if(!empty($id)){
        $sql = "SELECT * FROM employees where id = ".$id;

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_array($result);

                            $sql2 = "UPDATE  employees set status = 3  where id = ".$id;
                            // echo $sql;
                            // die;

                            if (mysqli_query($conn, $sql2)) {
                                echo "Record deleted successfully";
                                header("location:index.php");
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                header("location:index.php");
                            }
                        }
                    }
    }
}