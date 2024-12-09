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
  session_start();

  $nameErr = $emailErr = $PhoneErr = $genderErr = $websiteErr = $AddressErr = $fileErr = $monthErr = $pinCodeError = "";
  $name = $email = $Phone = $gender = $Address = $comment = $website = $file = $month = $pinCode = "";

  $_SESSION['from_page'] = "From Form";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // echo "</pre>";


    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }


    if (empty($_POST["Phone"])) {
      $PhoneErr = "Phone Number is required";
    } else {
      $Phone  = test_input($_POST["Phone"]);

      if (!preg_match('/^[0-9]*$/', $Phone)) {
        $PhoneErr = "Invalid Phone number format";
      }
      if (strlen($Phone) > 10) {
        $PhoneErr = "Not more than 10 is allowed";
      }
    }
    if (empty($_POST["pincode"])) {
      $pinCodeError = "Pin code is required";
    } else {
      $pinCode  = test_input($_POST["pincode"]);

      if (!preg_match('/^[0-9]*$/', $pinCode)) {
        $pinCodeError = "Invalid Pin code format";
      }
      if (strlen($pinCode) > 6) {
        $pinCodeError = "Not more than 6 is allowed";
      }
    }

    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);

      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "Invalid URL";
      }
    }
    if (empty($_POST["Address"])) {
      $AddressErr = "Address is required";
    } else {
      $Address = test_input($_POST["Address"]);
    }


    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
    if (empty($_FILES["myfile"])) {
      $fileErr = "file is required";
    } else {
      // print_r($_FILES);
      $file = $_FILES['myfile']['name'];
    }
    if (empty($_POST["month"])) {
      $monthErr = "month is required";
    } else {
      $month = test_input($_POST["month"]);
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2>PHP Form Validation Example</h2>
  <form method="post" action="../../08session.php" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Phone: <input type="text" name="Phone" value="<?php echo $Phone; ?>">
    <span class="error">* <?php echo $PhoneErr; ?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    Pin: <input type="text" name="pincode" value="<?php echo $pinCode; ?>">
    <span class="error"><?php echo $pinCodeError; ?></span>
    <br><br>
    Address: <textarea name="Address" rows="4" cols="20"><?php echo $Address; ?></textarea>
    <span class="error">*<?php echo $AddressErr; ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    file:
    <input type="file" id="myfile" name="myfile"><?php echo $file; ?>
    <span class="error">*<?php echo $fileErr; ?></span>
    <br><br>
    Birthday:
    <input type="month" id="month" name="month"><?php echo $month; ?>
    <span class="error">*<?php echo $monthErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

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
  echo $pinCode;
  echo "<br>";
  echo $Address;
  echo "<br>";
  echo $comment;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo "File:" . $file;
  echo $month;
  echo "<br>";
  ?>

</body>

</html>