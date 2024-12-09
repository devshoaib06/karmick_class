<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    echo "<pre>";
    print_r($_POST);
    print_r($_SESSION);
    echo "</pre>";
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    $_SESSION['from_page'] = "From session";
    session_destroy();
    echo "Session variables are set.";
    ?>

</body>

</html>