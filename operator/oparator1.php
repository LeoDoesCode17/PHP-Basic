<?php

/* <============================ HELPER ============================> */
function display($num1, $operation, $num2, $value){
    echo "$num1 $operation $num2 = $value\n";
}
/* <============================ END HELPER ============================> */


/* <============================ ARITHMETIC OPERATOR ============================> */
$x = 5;
$y = 2;
echo "Arithmetic Operator:\n";
display($x, '+', $y, $x + $y);
display($x, '-', $y, $x - $y);
display($x, '*', $y, $x * $y);
display($x, '/', $y, $x / $y);
display($x, '%', $y, $x % $y);
display($x, '^', $y, $x ** $y);
echo "\n";
/* <============================ END ARITHMETIC OPERATOR ============================> */

/* <============================ ASSIGNMENT OPERATOR ============================> */
/*
$x += $y => $x = $x + $y
$x -= $y => $x = $x - $y
$x *= $y => $x = $x * $y
$x /= $y => $x = $x / $y
$x %= $y => $x = $x % $y
*/
/* <============================ END ASSIGNMENT OPERATOR ============================> */

/* <============================ COMPARISON OPERATOR ============================> */
/*
$x == $y (equal operator): return true if $x is equal $y
$x === $y (Identical operator): return true if $x is equal to $y and both have same type
$x != $y (Not equal): return true if $x is not equal $y
$x <> $y (Not equal): same as !=
$x !== $y (Not identical): return true if $x is not equal $y or $x is different type with $y
<, >, <=, >=
*/
/*$x <=> $y (Spaceship):
    if $x < $y : return -1
    if $x == $y : return 0
    if $x > $y : return 1
*/
echo "Comparison Operator:\n";
$x = 10;
$y = 2;
display($x, '<=>', $y, $x <=> $y); //output: 1
echo "\n";
/* <============================ END COMPARISON OPERATOR ============================> */

/* <============================ INCREMENT/DECREMENT OPERATOR ============================> */
//pre-increment and pre-decrement
echo "Pre-increment and decrement\n";
$x = 10;
echo "Do pre-increment on $x: ".++$x."\n"; //output: 11
echo 'Value of $x now: '.$x."\n"; //output: 11
$y = 10;
echo "Do pre-decrement on $y: ".--$y."\n"; //output: 9
echo 'Value of $y now: '.$y."\n"; //output: 9

//post-increment and post-decrement
echo "Post-increment and decrement\n";
$x = 10;
echo "Do post-increment on $x: ".$x++."\n"; //output: 10
echo 'Value of $x now: '.$x."\n"; //output: 11
$y = 10;
echo "Do post-decrement on $y: ".$y--."\n"; //output: 10
echo 'Value of $y now: '.$y."\n"; //output: 9
echo "\n";
/* <============================ END INCREMENT/DECREMENT OPERATOR ============================> */

/* <============================ LOGICAL OPERATOR ============================> */
/*
AND operator: $x && $y returns true if $x and $y true
AND operator(alternative): $x and $y
OR operator: $x || $y returns false if $x and $y false
OR operator: $x or $y
XOR operator: $x xor $y returns true if $x same value (boolean) with $y
NOT operator: !$x returns negation of $x
*/
/* <============================ END INCREMENT/DECREMENT OPERATOR ============================> */

/* <============================ STRING OPERATOR ============================> */
echo "String Operator:\n";
$firstName = 'Leonardo';
$secondName = 'Nifinluri';
$fullName = $firstName." ".$secondName;
echo $firstName.$secondName."\n";
echo "\n";
/* <============================ END INCREMENT/DECREMENT OPERATOR ============================> */

/* <============================ ARRAY OPERATOR ============================> */
echo "Array Operator:\n";

echo "Union Operator: ";
$arr1 = [1, 2, 3, 4];
$arr2 = [2, 1, 4, 3];
print_r($arr2 + $arr1);
/*
Output : [1, 2, 3, 4, 9, 10]
Why? Because union operator in php merge arrays based on their keys
In arr1 the keys are from 0 to 3
In arr2 the keys are from 0 to 5

arr1 has keys from 0 to 3 but doesn't have key 4 and 5
arr2 has key 4 and key 5
the merge operator will ignore keys from arr2 that already exist in arr1 (index 0 to 3)
and merge the keys from arr2 that not exist in arr1 to arr1

union operator is not commutative : arr1 + arr2 not same as arr2 + arr1
*/

echo "Equality Operator: ";
$array1 = array('1' => 1, '2' => 2, '3' => 3, '0' => 0);
$array2 = array(false => '0', 1 => '1', 2 => '2', 3 => '3');
var_dump($array1 == $array2); //output: bool(true)
echo "\n";
/*
Equality operator returns true if all key-value pairs of the first array EQUIVALENT
to all key-value pairs of the second array
array1 = [
    ('1', 1),
    ('2', 2),
    ('3', 3),
    ('0', 0)
]
array2 = [
    (false, '0') equivalent to ('0', 0), 
    (1, '1') equivalent to ('1', 1),
    (2, '2') equivalent to ('2', 2),
    (3, '3') equivalent to ('3', 3)
]
*/

echo "Identity Operator: ";
var_dump($arr1 === $arr2);
echo "\n";
/*
Identity operator check if two arrays are identical in:
    number of elements
    key-value pairs
    sequence of elements
    data type of all value
*/

echo "Inequality Operator: ";
var_dump($arr1 != $arr2);
echo "\n";

echo "Inequlity Operator using <>: ";
var_dump($arr1 <> $arr2);
echo "\n";

echo "Non-identity Operator: ";
var_dump($arr1 !== $arr2);
echo "\n";

echo "Conditional Assignment Operator: \n";
echo "Ternary Operator: \n"; //form: $var = expression ? value if expression true : value if expression false
$a = 2;
$b = 3;
$x = $a > $b ? 'Hello' : 'Hey';
echo $x."\n"; // output: Hey
echo "Null Coalescing Operator: \n"; 
/*
form: $var = expr1 ?? expr2 
$var = expr1 if expr1 exists or not null
$var = expr2 if expr1 doesn't exist or null
*/
$a = 2;
$b = $a ?? 0; 
$c = $z ?? 9;
echo $x."\n"; // output: 2
echo $c."\n"; // output: 9
/* <============================ END ARRAY OPERATOR ============================> */



