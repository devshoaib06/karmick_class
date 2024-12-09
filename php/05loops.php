<?php
//Print number from 1 to 10;

// echo 1;
// echo 2;
// echo 3;
// echo 4;
// echo 5;
// echo 6;
// echo 7;
// echo 8;
// echo 9;
// echo 10;

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo "<br>";
}
echo "-----------------------------While--------------<br>";


$i = 1;
while ($i <= 10) {
    echo $i;
    if ($i == 3) break;
    $i++;
    echo "<br>";
}
echo "<br>";


/**Continue */
echo "----------------------------------------------";

echo "<br>";
$i = 0;
while ($i < 0) {
    $i++;
    if ($i == 3) continue;
    echo $i;
    echo "<br>";
}

echo "<br>";

echo "2*1=2 <br>";
echo "2*2=4 <br>";
echo "2*3=6 <br>";
?>
-------------------------------------------------------
Foreach loop
-------------------------------------------------------
<p>

    <?php
    $colors = array("red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow", "red", "green", "blue", "yellow");

    // for ($i = 0; $i < count($colors); $i++) {
    //     echo "$colors[$i] <br>";
    // }

    foreach ($colors as $key => $x) {
        echo "$x is in key : $key<br>";
    }
    ?>
</p>