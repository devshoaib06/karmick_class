<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyForm</title>
</head>

<body>
    <?php
    $nameErr = $emailErr =  $AddressErr= $PinCodeErr = $HomeTownErr = $StateErr = $CountryErr = $OccupationErr = $PasswordErr = $ConfirmPasswordErr = $genderErr ="";
    $name = $email =   $Address = $PinCode = $HomeTown =  $State = $Country = $Occupation = $Password = $ConfirmPassword =  $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "<pre>";
        // print_r($_POST);
        // die;
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
            if (strlen($name) > 10) {
                $nameErr = "Not more than 10 is allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        

        if (empty($_POST["Address"])) {
            $AddressErr = "Address is required";
        } else {
            $Address = $_POST["Address"];
            // check if  Address is well-formed
            if (!filter_var($Address, FILTER_VALIDATE_ADDRESS)) {
                $AddressErr = "Invalid Address format";
            }
        }

        if (empty($_POST["PinCode"])) {
            $PinCodeErr = "PinCode is required";
        } else {
            $PinCode = $_POST["PinCode"];
            // check if  Pincode is well-formed
            if (!filter_var($PinCode, FILTER_VALIDATE_PinCode)) {
                $PinCodeErr = "Invalid PinCode format";
            }
        }

        if (empty($_POST["HomeTown"])) {
            $HomeTownErr = "HomeTown is required";
        } else {
            $HomeTown = $_POST["HomeTown"];
            // check if  HomeTown is well-formed
            if (!filter_var($HomeTown, FILTER_VALIDATE_HOMETOWN)) {
                $HomeTownErr = "Invalid HomeTown format";
            }
        }

        if (empty($_POST["State"])) {
            $StateErr = "State is required";
        } else {
            $State = $_POST["State"];
            // check if  State is well-formed
            if (!filter_var($State, FILTER_VALIDATE_STATE)) {
                $StateErr = "Invalid State format";
            }
        }

        if (empty($_POST["Country"])) {
            $CountryErr = "Country is required";
        } else {
            $Country = $_POST["Country"];
            // check if  Country is well-formed
            if (!filter_var($Country, FILTER_VALIDATE_COUNTRY)) {
                $CountryErr = "Invalid Country format";
            }
        }

        if (empty($_POST["Occupation"])) {
            $OccupationErr = "Occupation is required";
        } else {
            $Occupation = $_POST["Occupation"];
            // check if  Occupation is well-formed
            if (!filter_var($Occupation, FILTER_VALIDATE_OCCUPATION)) {
                $OccupationErr = "Invalid Occupation format";
            }
        }

        if (empty($_POST["Password"])) {
            $PasswordErr = "Password is required";
        } else {
            $Password = $_POST["Password"];
            // check if  Password is well-formed
            if (!filter_var($Password, FILTER_VALIDATE_PASSWORD)) {
                $PasswordErr = "Invalid Password format";
            }
        }

        if (empty($_POST["ConfirmPassword"])) {
            $ConfirmPasswordErr = "ConfirmPassword is required";
        } else {
            $ConfirmPassword = $_POST["ConfirmPassword"];
            // check if  confirmPassword is well-formed
            if (!filter_var($Password, FILTER_VALIDATE_CONFIRMPASSWORD)) {
                $ConfirmPasswordErr = "Invalid ConfirmPassword format";
            }
        }



        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        
        Address: <input type="text" name="Address" value="<?php echo $Address; ?>">
        <span class="error">* <?php echo $AddressErr; ?></span>
        <br><br>
        PinCode: <input type="text" name="PinCode" value="<?php echo $PinCode; ?>">
        <span class="error">* <?php echo $PinCodeErr; ?></span>
        <br><br>
        HomeTown: <input type="text" name="HomeTown" value="<?php echo $HomeTown; ?>">
        <span class="error">* <?php echo $HomeTownErr; ?></span>
        <br><br>
        State: <input type="text" name="State" value="<?php echo $State; ?>">
        <span class="error">* <?php echo $StateErr; ?></span>
        <br><br>
        Country: <input type="text" name="Country" value="<?php echo $Country; ?>">
        <span class="error">* <?php echo $CountryErr; ?></span>
        <br><br>
        Occupation: <input type="text" name="Occupation" value="<?php echo $Occupation; ?>">
        <span class="error">* <?php echo $OccupationErr; ?></span>
        <br><br>
        Password: <input type="text" name="Password" value="<?php echo $Password; ?>">
        <span class="error">* <?php echo $PasswordErr; ?></span>
        <br><br>
       Confirm Password: <input type="text" name="ConfirmPassword" value="<?php echo $ConfirmPassword; ?>">
        <span class="error">* <?php echo $ConfirmPasswordErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit">
    </form>
   
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $Address;
    echo "<br>";
    echo $PinCode;
echo "<br>";
echo $HomeTown;
echo "<br>";
echo $State;
echo "<br>";
echo $Country;
echo "<br>";
echo $Occupation;
echo "<br>";
echo $Password;
echo "<br>";
echo $ConfirmPassword;
echo "<br>";
    echo $gender;

   



    ?>
</body>

</html>