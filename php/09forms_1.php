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

<?php
$errors = array_filter($_SESSION['errors']);
$success = $_SESSION['success'];
if (!empty($errors)) {

    echo "<pre>";
    print_r($errors);
    echo "</pre>";

    echo "<h3>You have following errors:</h3>";
    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    $nameErr = $errors['nameErr'];
}

if (!empty($success)) {
    echo "<h3>$success</h3>";
}

?>

<body>
    <div style="margin: 10px;">

        <form action="09forms_submit.php" method="POST">
            Name: <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
            <span class="error">* <?php echo isset($nameErr) ? $nameErr : ''; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
            <span class="error">* <?php echo isset($emailErr) ? $emailErr : ''; ?></span>
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