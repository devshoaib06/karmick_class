<?php
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
$nameErr = $emailErr = $PhoneErr = $genderErr = $AddressErr = $websiteErr = $fileErr = $monthErr = "";

if (!empty($errors)) {
  // echo "<pre>";
  // print_r($errors);
  // die;
  echo "<h3>You have following errors:</h3>";
  echo "<ul>";
  foreach ($errors as $error) {
    echo "<li>$error</li>";
  }
  $nameErr = isset($errors['nameErr']) ? $errors['nameErr'] : '';

  // if (isset($errors['nameErr'])) {
  //   $nameErr = $errors['nameErr'];
  // }

  $emailErr = isset($errors['emailErr']) ? $errors['emailErr'] : '';
  $PhoneErr = isset($errors['PhoneErr']) ? $errors['PhoneErr'] : '';
  $monthErr = isset($errors['monthErr']) ? $errors['monthErr'] : '';
  $AddressErr = isset($errors['AddressErr']) ? $errors['AddressErr'] : '';
  $genderErr = isset($errors['genderErr']) ? $errors['genderErr'] : '';
  $fileErr = isset($errors['fileErr']) ? $errors['fileErr'] : '';
  $websiteErr = isset($errors['websiteErr']) ? $errors['websiteErr'] : '';
}
if (!empty($success)) {
  echo "<h3>$success</h3>";
}
?>

<body>

  <h2>PHP Form Validation Example</h2>
  <form method="post" action="Form_1_submit.php" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
    <span class="error">* <?php echo isset($nameErr) ? $nameErr : ''; ?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
    <span class="error">* <?php echo isset($emailErr) ? $emailErr : ''; ?></span>
    <br><br>
    Phone: <input type="text" name="Phone" value="<?php echo isset($Phone) ? $Phone : ''; ?>">
    <span class="error">* <?php echo isset($PhoneErr) ? $PhoneErr : ''; ?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo isset($website) ? $websiteErr : ''; ?>">
    <span class="error">* <?php echo isset($websiteErr) ? $websiteErr : ''; ?></span>
    <br><br>
    Address: <textarea name="Address" rows="4" cols="20"><?php echo isset($Address) ? $Address : ''; ?></textarea>
    <span class="error">*<?php echo isset($AddressErr) ? $AddressErr : ''; ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo isset($comment) ? $comment : ''; ?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
    <span class="error">* <?php echo isset($genderErr) ? $genderErr : ''; ?></span>
    <br><br>
    file:
    <input type="file" id="myfile" name="myfile"><?php echo isset($file) ? $file : ''; ?>
    <span class="error">*<?php echo isset($fileErr) ? $fileErr : ''; ?></span>
    <br><br>
    Birthday:
    <input type="month" id="month" name="month"><?php echo isset($month) ? $month : ''; ?>
    <span class="error">*<?php echo isset($monthErr) ? $monthErr : ''; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

</body>

</html>