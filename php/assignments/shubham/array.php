<!DOCTYPE html>
<html>

<body>
   <p>

      #### **Part 1: Arrays**<br>;
      1. **Create a Simple Array**:
      Define an array of numbers `[1, 2, 3, 4, 5]`. Write a script to:
      - Print all the numbers in the array.
      - Print the first and the last number in the array.
   </p>

   ANSWER >>>
   <p>
      <?php
      $numbers = array(1, 2, 3, 4, 5);

      for ($i = 0; $i < count($numbers); $i++) {
         echo $numbers[$i] . ",";
      }
      echo "<br>";
      //print first number
      echo "First number:" . $numbers[0] . "";
      //print Last number
      echo "Last number:" . $numbers[count($numbers) - 1] . "";
      ?>
   </p>

   --------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      2. **Array of Colors**:
      Define an array `["Red", "Green", "Blue"]`. Write a script to:
      - Print each color on a new line using a loop.
      - Add a new color `"Yellow"` to the array and print the array again.
   </p>

   ANSWER>>>>>
   <p>

      <?php
      $color = array("Red", "Green", "Blue");
      $total_count = count($color);

      //Output the array:
      for ($i = 0; $i < $total_count; $i++) {
         echo $color[$i] . "<br>";
      }

      $color[] = "Yellow";
      $total_count = count($color);

      for ($i = 0; $i < $total_count; $i++) {
         echo $color[$i] . "<br>";
      }


      ?>

   </p>
   -------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      3. **Array Length**:
      Define an array of animals `["Dog", "Cat", "Elephant", "Tiger"]`. Write a script to:
      - Print the total number of animals in the array.
   </p>

   ANSWER >>>>
   <p>
      <?php
      $animals = array("Dog", "Cat", "Elephant", "Tiger");
      echo count($animals);
      ?>
   </p>
   ---------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      #### **Part 2: Functions**<br>;
      1. **Simple Function to Add Two Numbers**:
      Write a function `add($a, $b)` that takes two numbers and returns their sum.
      Call the function with `2` and `3`, and print the result.
   </p>

   ANSWER >>>>
   <p>
      <?php
      function sum($a, $b)
      {
         $c = $a + $b;
         return $c;
      }

      echo "2 + 3 = " . sum(2, 3) . "<br>";

      ?>
   </p>
   -----------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      2. **Function to Multiply Two Numbers**:
      Write a function `multiply($a, $b)` that takes two numbers and returns their product.
      Call the function with `4` and `5`, and print the result.
   </p>

   ANSWER >>>>
   <p>
      <?php
      // function multiply($a, $b)
      // {
      //    $mul = $a * $b;
      //    echo " $a  *  $b = $mul";
      // }
      // multiply(4, 5);

      function multiply($a, $b)
      {
         $mul = $a * $b;
         return $mul;
      }
      echo "4  *  5 =" . multiply(4, 5) . "";

      ?>
   </p>
   --------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      3. **Function to Say Hello**:
      Write a simple function `sayHello()` that prints `"Hello, World!"`.
      Call the function to display the message.
   </p>
   ANSWER >>>>
   <p>
      <?php
      function sayHello()
      {
         echo "Hello world!";
      }

      sayHello();
      ?>
   </p>
   ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      #### **Part 3: Using Arrays and Functions Together**<br>;
      1. **Sum of Array Elements**:
      Define an array of numbers `[10, 20, 30, 40]`.
      Write a function `sumArray($arr)` that takes an array and returns the sum of its elements.
      Call the function with this array and print the result.
   </p>
   ANSWER >>>>
   <p>
      <?php
      $a = array(10, 20, 30, 40);

      function sumarray($a)
      {
         $l = count($a);
         $sum = 0;
         for ($i = 0; $i < $l; $i++) {
            $sum = $sum + $a[$i];
         }
         return $sum;
      }
      echo "Sum of arrays=" . sumarray($a);
      ?>
   </p>
   ----------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      2. **Find Minimum in an Array**<br>
      Define an array of numbers `[12, 5, 9, 4, 15]`.
      Write a function `findMin($arr)` that finds and returns the smallest number in the array.
      Call the function with this array and print the smallest number.
   </p>
   ANSWER >>>>
   <p>
      <?php
      $indata = array(12, 5, 9, 4, 15);
      echo "original Array </br>";
      foreach ($indata as $c) {
         echo "$c </br>";
      }
      $cnt = count($indata);
      echo "Total Elements in Array $cnt </br>";
      $min = min($indata);
      echo "Smallest number in Array $min </br>";

      ?>
   </p>
   --------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      3. **Array Length with Function**<br>
      Define an array `["Apple", "Banana", "Orange"]`.
      Write a function `getArrayLength($arr)` that returns the length of the array.
      Call the function and print how many items are in the array.
   </p>
   ANSWER >>>>
   <p>
      <?php
      $fruits = array("Apple", "Banana", "Orange");


      function getArrayLength($fruits)
      {
         $l = count($fruits);
         return $l;
      }

      echo getArrayLength($fruits);

      ?>
   </p>

   --------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      #### **Bonus Challenge** (Optional)

      1. **Check if Array is Empty**:
      Write a function `isEmpty($arr)` that returns `true` if the array is empty and `false` otherwise.
      Test this with an empty array `[]` and a non-empty array `[1, 2, 3]`.
   </p>
   ANSWER >>>>
   <p>
      <?php
      function isEmpty($arr)
      {
         if (count($arr) > 0) {
            return "false";
         } else {
            return "true";
         }
      }
      $arr = [1];
      echo "Is Empty Array?:" . isEmpty($arr) . "";

      ?>
   </p>
   --------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
   <p>
      2. **Array of Squares**:
      Define an array `[1, 2, 3, 4, 5]`.
      Write a function `squareArray($arr)` that returns a new array where each number is the square of the original numbers.
      Example: `[1, 2, 3]` becomes `[1, 4, 9]`.
      Print the result of the function.
   </p>
   ANSWER >>>>
   <?php
   function squareArray($arr)
   {
      $final_array = [];
      for ($i = 0; $i < count($arr); $i++) {
         $final_array[$i] = $arr[$i] * $arr[$i];
      }

      return $final_array;
   }
   $ex_array = [1, 2,3, 7];
   echo "Square of Array:<br>";
   $squareArray = squareArray($ex_array);

   echo "Formatted array:[" . implode(",", $squareArray) . "]";


   ?>

   <p>
   </p>