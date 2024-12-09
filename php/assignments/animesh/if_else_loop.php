<!DOCTYPE html>
<html>

<body>
    <p>

        1. **Temperature Classification**:
        Write a program that defines a variable `temperature = 22`. Based on this value, output whether it’s "Hot", "Cold", or "Warm".
        - Hot: temperature > 30°C
        - Cold: temperature
        < 15°C
            - Warm: 15°C ≤ temperature ≤ 30°C
            </p>

            ANSWER >>>
            <p>
                <?php
                //If-Else Conditions//
                $t = 22;

                $x = ($t < 15) ? "Cold" : (($t > 30) ? "Hot" : "warm");
                echo $x;
                echo "<br>";
                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>
                2. **Even or Odd Check**:
                Define a variable `number = 7`. Write a program to check whether the number is even or odd and output the result.
                - **Hint**: Use the modulo operator `%`.
                //Define variable//
            </p>

            ANSWER >>>
            <p>
                <?php
                $a = 7;
                if ($a % 2 == 0) {
                    echo "$a is even.";
                } else {
                    echo "$a is odd.";
                }
                echo "<br>"; ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>

                3. **Grade Assignment**:
                Define a variable `score = 85`. Write a program to output the corresponding grade based on the following:
                - A: 90-100
                - B: 80-89
                - C: 70-79
                - D: 60-69
                - F: Below 60
                //Grade Assignment//
            </p>
            ANSWER >>>
            <p>

                <?php
                $y = 85;
                if ($y >= 90) {
                    echo "Score: $y, Grade: A";
                } elseif ($y >= 80) {
                    echo "Score: $y, Grade: B";
                } elseif ($y >= 70) {
                    echo "Score: $y, Grade: C";
                } elseif ($y >= 60) {
                    echo "Score: $y, Grade: D";
                } elseif ($y >= 50) {
                    echo "Score: $y, Grade: F";
                }
                echo "<br>";

                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>

                1. **Counting Numbers**:
                Write a program to print all numbers from 1 to 20.

            </p>
            ANSWER >>>
            <p>
                <?php
                //Part 2: For Loops//
                //Counting Numbers//
                $b = 1;
                $c = 20;
                for ($b; $b <= $c; $b++) {
                    echo "$b <br>";
                }
                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>

                2. **Sum of First N Numbers**:
                Define `n = 10`. Write a program that calculates and prints the sum of the first `n` numbers.
                //Sum of First N Numbers//

            </p>
            ANSWER >>>
            <p>

                <?php
                $c = 0;
                $n = 10;
                for ($c; $c <= $n; $c++) {
                    echo "`n = $c <br>";
                }
                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>

                3. **Multiplication Table**:
                Define `number = 5`. Write a program that prints the multiplication table for `5`, from `1` to `10`.
                //Multiplication Table//
            </p>
            ANSWER >>>
            <p>

                <?php
                $no = 5;
                $la = 10;
                $d = 1;
                for ($d; $d <= $la; $d++) {
                    echo "$d * $no =" . $d * $no . "<br>";
                }
                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>

                //while loop//
                1. **Print Numbers Until 10**:
                Write a program that uses a `while` loop to print the numbers from 1 to 10.
                //Print Numbers Until 10// //not seu//
            </p>
            ANSWER >>>
            <p>
                <?php
                $i = 0;
                while ($i < 10) {
                    echo $i + 1 . "<br>";
                    $i++;
                }
                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            ANSWER >>>
            <p>
                //Factorial Calculation//
                2. **Factorial Calculation**:
                Define a variable `number = 6`. Write a program that uses a `while` loop to calculate and print the factorial of that number.
            </p>
            ANSWER >>>
            <p>
                <?php
                $number = 6;
                $aa = 1;
                $i = 1;

                while ($i <= $number) {
                    $aa = $aa * $i;
                    $i++;
                }
                echo $aa . "<br>";
                ?>
            </p>
            ----------------------------------------------------------------------------------------------------------------------------------------- <br>
            <p>

                // //Sum of Even Numbers up to 20//
                3. **Sum of Even Numbers up to 20**:
                Write a program that uses a `while` loop to calculate the sum of all even numbers from 1 to 20.
            </p>
            ANSWER >>>
            <p>
                <?php
                // $number=20;
                // $i=1;
                // while ($i <=$number)
                // if ($number % 2==0) {
                // }


                ?>
            </p>
            <p>

                4. **FizzBuzz**:
                Write a program that prints the numbers from 1 to 50. However, for multiples of 3, print "Fizz" instead of the number, and for multiples of 5, print "Buzz". For numbers that are multiples of both 3 and 5, print "FizzBuzz".
            </p>
            ANSWER >>>
            <p>
                <?php
                // for ($i = 1; $i <= 50; $i++) {
                //     if ($i % 5 == 0) {
                //         echo "Fizz" . "<br>";
                //     } else if ($i % 2 == 0) {
                //         echo "Buzz" . "<br>";
                //     } else {
                //         echo $i . "<br>";
                //     }
                // }

                $i = 1;
                while ($i <= 50) {
                    if ($i % 5 == 0) {
                        echo "Fizz" . "<br>";
                    } else if ($i % 2 == 0) {
                        echo "Buzz" . "<br>";
                    } else {
                        echo $i . "<br>";
                    }
                    $i++;
                }

                ?>
            </p>

</body>

</html>