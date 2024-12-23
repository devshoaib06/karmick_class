<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $address = $salary =$status="";
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

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    // Validate address
    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
        $address_err = "Please enter an address.";
    } else {
        $address = $input_address;
    }

    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if (empty($input_salary)) {
        $salary_err = "Please enter the salary amount.";
    } elseif (!ctype_digit($input_salary)) {
        $salary_err = "Please enter a positive integer value.";
    } else {
        $salary = $input_salary;
    }

    if(isset($_POST["status"])){

        $input_status = trim($_POST["status"]);
        $is_active = $input_status;
    }else{
        $is_active=0;
    }
    // echo "<pre>";
    // print_r($is_active);die;
    // echo "</pre>";

    // Check input errors before inserting in database
    if (empty($name_err) && empty($address_err) && empty($salary_err)) {
        if(!empty($_POST['empid'])){
            $empid = $_POST['empid'];
            // Prepare an insert statement
            // $sql = "INSERT INTO employees (name, address, salary) VALUES ($name ,$address,$salary)";
            $sql = "UPDATE  employees set name = '" . $name . "',
                                          address= '" . $address . "',
                                          salary = '".$salary."',
                                          status = '".$is_active."'
                                          where id = ".$empid;
            // echo $sql;
            // die;

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }else{
            // Prepare an insert statement
            // $sql = "INSERT INTO employees (name, address, salary) VALUES ($name ,$address,$salary)";
            $sql = "INSERT INTO employees (name, address, salary) VALUES ('" . $name . "','" . $address . "','" . $salary . "')";
            // echo $sql;
            // die;

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // if ($stmt = mysqli_prepare($link, $sql)) {
        //     // Bind variables to the prepared statement as parameters
        //     mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);

        //     // Set parameters
        //     $param_name = $name;
        //     $param_address = $address;
        //     $param_salary = $salary;

        //     // Attempt to execute the prepared statement
        //     if (mysqli_stmt_execute($stmt)) {
        //         // Records created successfully. Redirect to landing page
        //         header("location: index.php");
        //         exit();
        //     } else {
        //         echo "Oops! Something went wrong. Please try again later.";
        //     }
        // }

        // // Close statement
        // mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
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
                    <h2 class="mt-5"><?php if(!empty($row['id'])){echo "Update";}else{echo "Create";}?> Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <?php 
                        // echo "<pre>";
                        // print_r($row);
                        // echo "</pre>";
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php if(!empty($row['name'])){echo $row['name'];}?>">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php if(!empty($row['address'])){echo $row['address'];}?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php if(!empty($row['salary'])){echo $row['salary'];}?>">
                            <span class="invalid-feedback"><?php echo $salary_err; ?></span>
                        </div>
                        <div class="form-group">
                        <input class="form-check-input" type="checkbox" value="1" name ="status" id="flexCheckChecked" 
                        <?php if(!empty($row['status'])){
                           if($row['status']==1){
                            echo "checked";
                           }
                            
                        }?>
                        >
  <label class="form-check-label" for="flexCheckChecked">
    Is Active   <?php if(!empty($row['status'])){echo $row['status'];}?>
  </label>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        <input type="hidden" name="empid" id="empid" value="<?php if(!empty($row['id'])){echo $row['id'];}?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>