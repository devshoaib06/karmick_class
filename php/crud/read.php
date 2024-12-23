<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";


if(!empty($_GET)){
    $id= $_GET['id'];
    if(!empty($id)){
        $sql = "SELECT * FROM employees where id = ".$id;

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_array($result);

                            
                        }
                    }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">View Record</h2>
                        <div class="form-group">
                            <div class="col-md-5"><label>Name : </label></div><div class="col-md-5"> <label><?php if(!empty($row['name'])){echo $row['name'];}?></label></div>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-md-5"><label>Address : </label></div><div class="col-md-5"><label><?php if(!empty($row['address'])){echo $row['address'];}?></label></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5"><label>Salary : </label></div><div class="col-md-5"><label><?php if(!empty($row['salary'])){echo $row['salary'];}?></label></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>