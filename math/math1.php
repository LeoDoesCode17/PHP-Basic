<?php

/* <============================ MATH FUNCTION ============================> */
//to get the value of pi
$pi = pi();
echo "Value of pi: $pi\n\n";

//to get max and min to a list of args or array
$arr = [1, -1, 2, 3, -6, 8];
$max = max($arr);
$min = min($arr);
echo "Max element is: $max\n";
echo "Min element is: $min\n\n";

//to get the absolute value of a number
$num = -1.4;
$absNum = abs($num);
echo "Absolute value of $num: $absNum\n\n";

//to get square root of a number (the number must be >= 0 else return nan)
$num = 1.44;
$sqrtNum = sqrt($num);
echo "Square root of $num: $sqrtNum\n\n";

//to round a floating point number (double) to its nearest integer
$num1 = 0.6;
echo "Round of $num1: ".round($num1)."\n";
$num2 = 0.5;
echo "Round of $num2: ".round($num2)."\n";
$num3 = 0.49;
echo "Round of $num3: ".round($num3)."\n\n";

//to generate random number
$random = rand();
echo "Random number: $random\n";
$rangeRand = rand(1, 10); //generate random number from 1 to 10 inclusive
echo "Random number from 1 to 10: $rangeRand\n\n";

/* <============================ END MATH FUNCTION ============================> */
