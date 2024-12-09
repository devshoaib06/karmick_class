<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <?php

    $_SESSION['errors'] = [];

    $_SESSION['success'] = "";

    $nameErr = $emailErr = $genderErr =  "";
    $name = $email = $gender = "";

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
                $nameErr = "Not more than 10 is allowed";
                $_SESSION["errors"]['nameErr'] = $nameErr;
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $_SESSION["errors"][] = $emailErr;
        } else {
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $_SESSION["errors"][] = $emailErr;
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $_SESSION["errors"][] = $genderErr;
        } else {
            $gender = $_POST["gender"];
            $_SESSION["errors"][] = $genderErr;
        }

        $errors = array_filter($_SESSION['errors']);
        // echo "<pre>";
        // print_r($errors);
        // die;

        if (empty($errors)) {
            $_SESSION['success']  = "Successfully submitted";
        }
        header("Location: http://localhost/classes/php/09forms_1.php"); /* Redirect browser */
        exit;
    }



    ?>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    ?>
</body>

</html>