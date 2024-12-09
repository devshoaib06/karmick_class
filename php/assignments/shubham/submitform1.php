<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>

<body>
    <?php

    $_SESSION['errors'] = [];

    $_SESSION['success'] = "";

    $nameErr = $emailErr = $AddressErr = $passwordErr = $confirmPasswordErr =  $genderErr =  "";
    $name = $email = $Address = $password = $confirmPassword = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        // echo "<pre>";
        // print_r($_POST);
        // die;
        if (empty($_POST["name"])) {

            $nameErr = "Name is required";
            $_SESSION["errors"]['nameErr'] = $nameErr;
        } else {
            $name = $_POST["name"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                $_SESSION["errors"]['nameErr'] = $nameErr;
            }
            if (strlen($name) > 10) {
                $nameErr = "Name not more than 10 is allowed";
                $_SESSION["errors"]['nameErr'] = $nameErr;
            }
        }



        if (empty($_POST["email"])) {

            $emailErr = "email is required";
            $_SESSION["errors"]['emailErr'] = $emailErr;
        } else {
            $email = $_POST["email"];
            // check if name only contains letters and whitespace
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $_SESSION["errors"]['emailErr'] = $emailErr;
            }
        }

        if (empty($_POST["Address"])) {
            $AddressErr = "Address is required";
            $_SESSION["errors"]['AddressErr'] = $AddressErr;
        } else {
            $Address = test_input($_POST["Address"]);
            $_SESSION["errors"]['AddressErr'] = $AddressErr;
        }

        if (!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
            $password = test_input($_POST["password"]);
            $cpassword = test_input($_POST["cpassword"]);
            if (strlen($_POST["password"]) <= '8') {
                $passwordErr = "Your Password Must Contain At Least 8 Characters!";
            } elseif (!preg_match("#[0-9]+#", $password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Number!";
            } elseif (!preg_match("#[A-Z]+#", $password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
        } elseif (!empty($_POST["password"])) {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        } else {
            $passwordErr = "Please enter password   ";
        }

        if ($passwordErr) {
            $_SESSION["errors"]['PasswordErr'] = $passwordErr;
        }

        // if (empty($_POST["password"])) {

        //     $passwordErr = "password is required";
        //     $_SESSION["errors"]['PasswordErr'] = $passwordErr;
        // } else {
        //     $Password = $_POST["Password"];
        //     // check if password is well-formed
        //     if (test_input($password, FILTER_VALIDATE_PASSWORD)) {
        //         $passwordErr = "Invalid password format";
        //         $_SESSION["errors"]['passwordErr'] = $passwordErr;
        //     }
        // }

        // if (empty($_POST["confirmpassword"])) {

        //     $confirmpasswordErr = "confirmpassword is required";
        //     $_SESSION["errors"]['confirmPasswordErr'] = $confirmpasswordErr;
        // } else {
        //     $confirmPassword = $_POST["confirmPassword"];
        //     // check if confirmpassword is well-formed
        //     if (test_input($confirmpassword, FILTER_VALIDATE_PASSWORD)) {
        //         $confirmpasswordErr = "Invalid confirmpassword format";
        //         $_SESSION["errors"]['confirmpasswordErr'] = $confirmpasswordErr;
        //     }
        // }


        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $_SESSION["errors"][] = $genderErr;
        } else {
            $gender = $_POST["gender"];
            $_SESSION["errors"][] = $genderErr;
        }
    }

    $errors = array_filter($_SESSION['errors']);
    // echo "<pre>";
    // print_r($errors);
    // die;

    if (empty($errors)) {
        $_SESSION['success']  = "Successfully submitted";
    }

    $url =  $_SERVER['HTTP_REFERER'];

    header("Location:$url"); /* Redirect browser */
    exit;






    ?>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $Address;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $confirmPassword;
    echo "<br>";
    echo $gender;
    ?>
</body>

</html>