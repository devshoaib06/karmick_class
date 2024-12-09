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

<?php
// print_r($_SESSION);
$errors = [];
$success = "";
if (isset($_SESSION['errors'])) {

  $errors = array_filter($_SESSION['errors']);
}
if (isset($_SESSION['success'])) {

  $success = $_SESSION['success'];
}
if (!empty($errors)) {

  echo "<h3>You have following errors:</h3>";
  echo "<ul>";
  foreach ($errors as $error) {
    echo "<li>$error</li>";
  }
  // $nameErr = $errors['nameErr'];
}

?>

<body>
  <div style="margin: 50px;">

    <form action="submitform1.php" method="POST">
      Name: <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
      <span class="error">* <?php echo isset($nameErr) ? $nameErr : ''; ?></span>
      <br><br>
      E-mail: <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
      <span class="error">* <?php echo isset($emailErr) ? $emailErr : ''; ?></span>
      <br><br>


      Address: <input type="text" name="Address" value="<?php echo isset($address) ? $Address : ''; ?>">
      <span class="error">* <?php echo isset($AddressErr) ? $addressErr : ''; ?></span>
      <br><br>
      Password: <input type="text" name="Password" value="<?php echo isset($Password) ? $Password : ''; ?>">
      <span class="error">* <?php echo isset($PasswordErr) ? $PasswordErr : ''; ?></span>
      <br><br>
      confirm Password: <input type="text" name="confirmPassword" value="<?php echo isset($confirmpPassword) ? $confirmPassword : ''; ?>">
      <span class="error">* <?php echo isset($confirmPasswordErr) ? $confirmPasswordErr : ''; ?></span>
      <br><br>
      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
      <span class="error">* <?php echo $genderErr ?? ''; ?></span>
      <br><br>
      <input type="submit">
    </form>
  </div>

</body>

</html>