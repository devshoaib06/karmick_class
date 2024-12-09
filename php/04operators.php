<!DOCTYPE html>
<html>

<body>
    <h2>PHP Assignment Operators</h2>
    <?php
    $x = 20;
    $y = 30;
    $x +=  $y + 100;
    // $x += 100;

    echo $x;
    ?>
    <h2>String Operators</h2>
    <?php
    $txt1 = "Hello";
    $txt2 = " world!";
    $txt3 = " Shoaib!";
    $txt1 .=  $txt2 . $txt3;
    //$txt1 .= $txt2;
    echo $txt1;
    ?>
    <h2>Conditiona Operators</h2>
    <?php
    // if empty($user) = TRUE, set $status = "anonymous"
    $user = "";
    echo $status = 1 == 1 ? "anonymous" : "logged in";
    echo ("<br>");

    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = 1 == 2 ? "anonymous" : "logged in";
    ?>

</body>

</html>