<?php

// define variable
$number = 7;


// check if even or add
if ($number % 2 == 0) {
  echo "$number is even.<br>";
} else {
  echo "$number is odd.<br>";
}










//set maximum value
$max = 20;
echo "print number 1 to 20<br>";

// for loop
for ($i = 1; $i <= $max; $i++) {
  echo "$i" . "<br>";
}

//Define number
$number = 5;

//Define range
$start = 1;
$end = 10;
echo "print table of 5. <br>";

// For loop
for ($i = $start; $i <= $end; $i++) {
  echo "$number x $i =" . ($number * $i) . "<br>";
}

$number = 6;
$de = 1;
$i = 1;
while ($i <= $number) {
  $de = $de * $i;
  $i++;
}
echo "factorial of 6 is : $de <br>";


$i = 1;
echo "print number 1 to 10<br>";
while ($i < 11) {
  echo "$i" . "<br>";
  $i++;
}
$temperature = 22;

if ($temperature > 30) {
  echo "Hot";
} else if ($temperature < 15) {
  echo "Cold";
} else {
  echo "Warm";
}

$initial_number = 1;
$sum_of_even = 0;

while ($initial_number <= 20) {
  if ($initial_number % 2 == 0) {
    $sum_of_even = $sum_of_even + $initial_number;
  }
  $initial_number++;
}
echo "Sum of even numbers: ${sum_of_even}";
?>

-------------------------------------------------------- <br>

<?php
$sum_of_even = 0;

for ($initial_number = 1; $initial_number <= 20; $initial_number++) {
  if ($initial_number % 2 == 0) {
    $sum_of_even = $sum_of_even + $initial_number;
  }
}
echo "Sum of even numbers using for: $sum_of_even";
?>

<br>-------------------------------------------------------- <br>