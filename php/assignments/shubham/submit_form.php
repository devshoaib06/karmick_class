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

    $nameErr = $emailErr = $AddressErr = $PasswordErr =  $genderErr =  "";
    $name = $email = $Address = $Password =  $gender = "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
                $nameErr = "Not more than 10 is allowed";
                $_SESSION["errors"]['nameErr'] = $nameErr;
            }
        }
        if (empty($_POST["email"])) {

            $emailErr = "email is required";
            $_SESSION["errors"]['emailErr'] = $emailErr;
        } else {
            $email = $_POST["email"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $email)) {
                $emailErr = "Only letters and white space allowed";
                $_SESSION["errors"]['emailErr'] = $emailErr;
            }
            if (strlen($email) > 10) {
                $emailErr = "Not more than 10 is allowed";
                $_SESSION["errors"]['emailErr'] = $emailErr;
            }
        }

        if (empty($_POST["Address"])) {

            $AddressErr = "Address is required";
            $_SESSION["errors"]['AddressErr'] = $AddressErr;
        } else {
            $Address = $_POST["Address"];
            if (!filter_var($Address, FILTER_VALIDATE_ADDRESS)) {
                $AddressErr = "Invalid Address format";
                $_SESSION["errors"]['addressErr'] = $AddressErr;
            }
        }



        if (empty($_POST["Password"])) {

            $PasswordErr = "Password is required";
            $_SESSION["errors"]['PasswordErr'] = $PasswordErr;
        } else {
            $Password = $_POST["Password"];
            // check if Password is well-formed
            if (!filter_var($Password, FILTER_VALIDATE_PASSWORD)) {
                $PasswordErr = "Invalid Password format";
                $_SESSION["errors"]['PasswordErr'] = $PasswordErr;
            }
        }


        if (isset($_POST["gender"])) {
            $genderErr = "Gender is required";
            $_SESSION["errors"]['genderErr'] = $genderErr;
        } else {
            $gender = $_POST["gender"];
            $_SESSION["errors"]['genderErr'] = $genderErr;
        }
    }
    $errors = array_filter($_SESSION['errors']);


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
    echo $Password;
    echo "<br>";
    echo $gender;
    ?>
</body>

</html>