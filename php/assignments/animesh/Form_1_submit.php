<?php
echo "i am in";
die;
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <?php
  $_SESSION['errors'] = [];

  $_SESSION['success'] = "";

  $nameErr = $emailErr = $PhoneErr = $genderErr = $AddressErr = $websiteErr = $fileErr = $monthErr = "";
  $name = $email = $Phone = $gender = $Address = $comment = $website = $file = $month = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "<pre>";
    // print_r($_FILES);
    // die;
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      $_SESSION["errors"]['nameErr'] = $nameErr;
    } else {
      $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
        $_SESSION["errors"]['nameErr'] = $nameErr;
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $_SESSION["errors"]['emailErr'] = $emailErr;
    } else {
      $email = test_input($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $_SESSION["errors"]['emailErr'] = $emailErr;
      }
    }


    if (empty($_POST["Phone"])) {
      $PhoneErr = "Phone Number is required";
      $_SESSION["errors"]['PhoneErr'] = $PhoneErr;
    } else {
      $Phone  = test_input($_POST["Phone"]);

      if (!preg_match('/^[0-9]*$/', $Phone)) {
        $PhoneErr = "Invalid Phone number format";
        $_SESSION["errors"]['PhoneErr'] = $PhoneErr;
      }
      if (strlen($Phone) > 10) {
        $PhoneErr = "Not more than 10 is allowed";
        $_SESSION["errors"]['PhoneErr'] = $PhoneErr;
      }
    }

    if (empty($_POST["website"])) {
      $websiteErr = "website is required";
      $_SESSION["errors"]['websiteErr'] = $websiteErr;
    } else {
      $website = test_input($_POST["website"]);

      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "Invalid URL";
        $_SESSION["errors"]['websiteErr'] = $websiteErr;
      }
    }
    if (empty($_POST["Address"])) {
      $AddressErr = "Address is required";
      $_SESSION["errors"]['AddressErr'] = $AddressErr;
    } else {
      $Address = test_input($_POST["Address"]);
      $_SESSION["errors"]['AddressErr'] = $AddressErr;
    }


    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
      $_SESSION["errors"]['genderErr'] = $genderErr;
    } else {
      $gender = test_input($_POST["gender"]);
      $_SESSION["errors"]['genderErr'] = $genderErr;
    }
    if (empty($_FILES["myfile"])) {
      $fileErr = "file is required";
      $_SESSION["errors"]['fileErr'] = $fileErr;
    } else {
      $file = test_input($_FILES["file"]);
      $_SESSION["errors"]['fileErr'] = $fileErr;
    }
    if (empty($_POST["month"])) {
      $monthErr = "month is required";
      $_SESSION["errors"]['monthErr'] = $monthErr;
    } else {
      $month = test_input($_POST["month"]);
      $_SESSION["errors"]['monthErr'] = $monthErr;
    }
    $errors = array_filter($_SESSION['errors']);
    if (empty($errors)) {
      $_SESSION['success']  = "Successfully submitted";
    }
    $url =  $_SERVER['HTTP_REFERER'];

    header("Location:$url"); /* Redirect browser */
    exit;
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <?php
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $Phone;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $Address;
  echo "<br>";
  echo $comment;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo $file;
  echo "<br>";
  echo $month;
  echo "<br>";
  ?>

</body>

</html>