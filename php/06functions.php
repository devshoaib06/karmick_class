<?php
$i = 0;


function familyName($fname = "Rahul", $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight();
setHeight(80);
echo $i;
function sum($x, $y)
{
    $a = "0";
    $z = $x + $y;
    $message = "Added";
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

$x = 75;

function myfunction()
{
    // echo $x;
    echo $GLOBALS["x"];
}

myfunction();

echo "<pre>";
print_r($_SERVER);
