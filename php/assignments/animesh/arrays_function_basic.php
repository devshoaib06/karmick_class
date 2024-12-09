<!DOCTYPE html>
<html>

<body>
   <pre>
<h>
  //Assignment: Basic Arrays and Functions in PHP//
  **Part 1: Arrays**

1. **Create a Simple Array**:  
   Define an array of numbers `[1, 2, 3, 4, 5]`. Write a script to:
   - Print all the numbers in the array.
   - Print the first and the last number in the array.
</h>
ANSWER >>>

<?php

$number = ["1", "2", "3", "4", "5"];
echo count($number);
?>

--------------------------------------------<br>
<h>
2. **Array of Colors**:  
   Define an array `["Red", "Green", "Blue"]`. Write a script to:
   - Print each color on a new line using a loop.
   - Add a new color `"Yellow"` to the array and print the array again.
  </h>
ANSWER >>>

<?php
$colors = array("Red", "Green", "Blue");
$colors[] = "Yellow";

print_r($colors);
?>
--------------------------------------------<br>
<h>
3. **Array Length**:  
   Define an array of animals `["Dog", "Cat", "Elephant", "Tiger"]`. Write a script to:
   - Print the total number of animals in the array.

</h>
ANSWER >>>

<?php
$animals = array("Dog", "Cat", "Elephant", "Tiger");
echo count($animals);

?>

--------------------------------------------<br>
<h>
**Part 2: Functions**

1. **Simple Function to Add Two Numbers**:  
   Write a function `add($a, $b)` that takes two numbers and returns their sum.  
   Call the function with `2` and `3`, and print the result.
</h>
ANSWER >>>

<?php
$a = 2;
$b = 3;
function add($a, $b)
{
   $c = $a + $b;
   return $c;
}
echo " $a + $b =" . add($a, $b);
?>

--------------------------------------------<br>
<h>
2. **Function to Multiply Two Numbers**:  
   Write a function `multiply($a, $b)` that takes two numbers and returns their product.  
   Call the function with `4` and `5`, and print the result.

</h>
ANSWER >>>

<?php
$a = 4;
$b = 5;
function multiply($a, $b)
{
   $c = $a * $b;
   return $c;
}
echo " $a * $b =" . multiply($a, $b);
?> 

--------------------------------------------<br>
<h>
3. **Function to Say Hello**:  
   Write a simple function `sayHello()` that prints `"Hello, World!"`.  
   Call the function to display the message.
</h>
ANSWER >>>

<?php
function sayHello()
{
   echo "Hello world!";
}

sayHello();
?> 

--------------------------------------------<br>
<h>

<h1>NOT</h1>
**Part 3: Using Arrays and Functions Together**

1. **Sum of Array Elements**:  
   Define an array of numbers `[10, 20, 30, 40]`.  
   Write a function `sumArray($arr)` that takes an array and returns the sum of its elements.  
   Call the function with this array and print the result.
</h>
ANSWER >>>

<?php
//not//
$numbers = array(10, 20, 30, 40, 50);

$sum = array_sum($numbers);
findsum($numbers, $sum);

function findsum($numbers, $sum)
{
   $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3];
}
echo "Sum of Numbers: " . $sum;

?>

--------------------------------------------<br>
<h>
2. **Find Minimum in an Array**:  
   Define an array of numbers `[12, 5, 9, 4, 15]`.  
   Write a function `findMin($arr)` that finds and returns the smallest number in the array.  
   Call the function with this array and print the smallest number.
</h>
ANSWER >>>

<?php
$arr = array(12, 5, 9, 4, 15);
$n = count($arr);
findMin($arr, $n);
function findMin($arr, $n)
{
   $min = $arr[0];
   for ($i = 1; $i < $n; $i++) {
      if ($arr[$i] < $min)
         $min = $arr[$i];
   }
   echo "smallest number-$min \n";
}
?>

--------------------------------------------<br>
<h><h1>NOT</h1>
3. **Array Length with Function**:  
   Define an array `["Apple", "Banana", "Orange"]`.  
   Write a function `getArrayLength($arr)` that returns the length of the array.  
   Call the function and print how many items are in the array.

</h>
ANSWER >>>

<?php
$fruits = array("Apple", "Banana", "Orange");


$flength = count($fruits);

function getArrayLength($fruits)
{
   $fruits = count($fruits);
}
echo getArrayLength($fruits);


?>

--------------------------------------------<br>
<h>
#### **Bonus Challenge** (Optional)

1. **Check if Array is Empty**:  
   Write a function `isEmpty($arr)` that returns `true` if the array is empty and `false` otherwise.  
   Test this with an empty array `[]` and a non-empty array `[1, 2, 3]`.
</h>
ANSWER >>>

<?php

?>
</pre>
</body>

</html>