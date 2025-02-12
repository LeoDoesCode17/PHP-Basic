<?php

/* <============================ NUMBER DATA TYPE ============================> */
$a = 10;
echo 'Type of $a: '.gettype($a)."\n";

$b = 1.44;
echo 'Type of $b: '.gettype($b)."\n";

$c = '10';
echo 'Type of $c: '.gettype($c)."\n";
/* <============================ END NUMBER DATA TYPE ============================> */

/* <============================ INTERGER TYPE ============================> */
//to check if a variable is integer or not
echo 'Is $a an integer? '.is_int($a)."\n"; //Output: 1 (true)

//largest and smallest integer supported
echo 'Largest integer: '.PHP_INT_MAX."\n"; //Output: 9223372036854775807
echo 'Smallest integer: '.PHP_INT_MIN."\n"; //Output: -9223372036854775808
echo 'Size of integer: '.PHP_INT_SIZE."\n"; //Output: 8
/* <============================ END INTERGER TYPE ============================> */

/* <============================ DOUBLE TYPE ============================> */
///to check if a variable is double or not
echo 'Is $b a double? '.is_double($b)."\n"; //Output: 1 (true)

//largest and smallest double supported
echo 'Largest double: '.PHP_FLOAT_MAX."\n"; //Output: 1.7976931348623E+308
echo 'Smallest double: '.PHP_FLOAT_MIN."\n"; //Output: 2.2250738585072E-308
/* <============================ END DOUBLE TYPE ============================> */

/* <============================ INFINITY TYPE ============================> */
//A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
//to check if a variable is inifinite or not
$d = 1.9e411;
echo 'Is $b an infinity? '.is_infinite($b)."\n"; //Output: 0 (false)
echo 'Is $d an infinity? '.is_infinite($d)."\n"; //Output: 1 (true)

//to check if a variable is finite or not
echo 'Is $b a finite? '.is_finite($b)."\n"; //Output: 1 (true)
echo 'Is $d a finite? '.is_finite($d)."\n"; //Output: 0 (false)
/* <============================ END INFINITY TYPE ============================> */

/* <============================ NAN TYPE ============================> */
//NAN stands for Not A Number
//NaN is used for impossible mathematical operations
//to check if a variable is NAN or not
$a = acos(9);
echo 'Is $a a NAN? '.is_nan($a)."\n"; //Output: 1 (true)
//Reason? The value of acos() must be between -1 and 1, so the result is NAN

$b = log(0);
echo 'Is $b a NAN? '.is_nan($b)."\n"; //Output: 1 (true)
//Reason? The value of log() must be greater than 0, so the result is NAN

$c = sqrt(-9);
echo 'Is $c a NAN? '.is_nan($c)."\n"; //Output: 1 (true)
//Reason? The value of sqrt() must be greater than or equal 0, so the result is NAN
/* <============================ END NAN TYPE ============================> */

/* <============================ NUMERICAL STRING ============================> */
//Numerical strings are strings that contain only digits
//to check if a string is numerical or not
$a = '123';
echo 'Is $a a numerical string? '.is_numeric($a)."\n"; //Output: 1 (true)

$b = 123;
echo 'Is $b a numerical string? '.is_numeric($b)."\n"; //Output: 1 (true)

$c = '123a';
echo 'Is $c a numerical string? '.is_numeric($c)."\n"; //Output: 0 (false)
/* <============================ END NUMERICAL STRING ============================> */

/* <============================ CASTING TO INT ============================> */
//Casting is when you convert a variable value from one data type to another data type
//to cast a variable to integer
$a = 10.9;
echo 'Type of $a: '.gettype($a)."w ith value $a"."\n"; //Output: double
$int_a = (int)$a;
echo 'Type of $int_a: '.gettype($int_a)." with value $int_a"."\n"; //Output: integer

$b = '123';
echo 'Type of $b: '.gettype($b)." with value $b"."\n"; //Output: string
$int_b = (int)$b;
echo 'Type of $int_b: '.gettype($int_b)." with value $int_b"."\n"; //Output: integer

$c = 'a';
echo 'Type of $c: '.gettype($c)." with value $c"."\n"; //Output: string

$int_c = (int)$c;
echo 'Type of $int_c: '.gettype($int_c)." with value $int_c"."\n"; //Output: integer
/* <============================ END CASTING TO INT ============================> */






