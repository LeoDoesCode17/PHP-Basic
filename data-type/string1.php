<?php

$name = 'Leonardo';
echo $name;


/* <============================ SINGLE QUOTE ============================> */
//single quote does not parse the variable
$name = 'Leonardo';
echo 'My name is $name'."\n"; //Output: My name is $name
/* <============================ END SINGLE QUOTE ============================> */


/* <============================ DOUBLE QUOTE ============================> */
//Double quote does parse the variable (it performs action to special characters)
$name = 'Leonardo';
echo "My name is $name"."\n"; //Output: My name is Leonardo
/* <============================ END DOUBLE QUOTE ============================> */


/* <======================= STRING FUNDAMENTAL FUNCTIONS =======================> */
//strlen() - returns the length of the string
$name = 'Leonardo';
echo strlen($name)."\n"; //Output: 8

//str_word_count() - returns the number of words in the string
$name = 'Leonardo Nifinluri';
echo str_word_count($name)."\n"; //Output: 2

//strpos() - search for a specific text within a string
$name = 'Hello, World';
echo strpos($name, 'World')."\n"; //Output: 7 (index of the word 'World')
/* <======================= END STRING FUNDAMENTAL FUNCTIONS =======================> */


/* <============================ MODIFY STRING ============================> */
//strtoupper() - convert string to uppercase
$name = 'leonardo';
echo strtoupper($name)."\n"; //Output: LEONARDO

//strtolower() - convert string to lowercase
$name = 'LEONARDO';
echo strtolower($name)."\n"; //Output: leonardo

//str_replace() - replace text within a string
$name = 'Hello, World';
echo str_replace('World', 'Leonardo', $name)."\n"; //Output: Hello, Leonardo

//strrev() - reverse the string
$name = 'Leonardo';
echo strrev($name)."\n"; //Output: odranoeL

//trim() - remove whitespace or other predefined characters from both sides of a string
$name = 'Leonardo Nifinluri ';
echo trim($name)."\n"; //Output: Leonardo Nifinluri

//explode() - break a string into an array
//the first parameter of explode() is the delimiter(defined in the string), the second parameter is the string
$name = 'Leonardo Nifinluri';
$arr = explode(' ', $name);
print_r($arr); //Output: Array ( [0] => Leonardo [1] => Nifinluri )
/* <============================ END MODIFY STRING ============================> */

/* <============================ CONCAT STRING ============================> */
$firstName = 'Leonardo';
$lastName = 'Nifinluri';
echo $firstName.' '.$lastName."\n"; //Output: Leonardo Nifinluri

$x = 10;
$y = 20;
echo "$x.$y\n"; //Output: 10.20
echo "$x"."$y\n"; //Output: 1020
/* <============================ END CONCAT STRING ============================> */

/* <============================ SLICING STRING ============================> */
/*
substr($str, startIndex, lenOfSlice) - return a part of a string 
startIndex : start slicing index
lenOfSlice : length of the slice
*/
$name = 'Leonardo';
echo substr($name, 0, 3)."\n"; //Output: Leo

//slice to the last index
$name = 'Leonardo';
echo substr($name, 3)."\n"; //Output: nardo

//slice from the last index (use negative index)
$name = 'Leonardo';
echo substr($name, -3, 2)."\n"; //Output: rd

//negative lenght
$name = 'Leonardo';
echo substr($name, 0, -3)."\n"; //Output: Leona
//explanation: slice from index 0 up to index -3
/* <============================ END SLICING STRING ============================> */