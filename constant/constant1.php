<?php

/* <============================ CONSTANT ============================> */
//constant is a variable that its value can not be changed or undefined
//constant scope is global, that means can be used across the entire script

//define(nameConstant, valueOfConstant) to make constant

//constant string
define("NAME", "Leonardo Nifinluri");
echo "Constant - String\n";
echo "Name: ".NAME."\n\n";

//constant array
define('STUDENTS', [
    NAME,
    'Bowo',
    'Naruto'
]);
echo "Constant - Array\n";
echo "First element of STUDENTS: ". STUDENTS[0]. "\n\n";

//using const keyword
// const $WIDTH = 100;
// echo "Constant using 'const' keyword\n";
// echo "Width: $WIDTH\n\n";

//global scope
function test(){
    echo "This is the value of constatn: ". NAME ."\n\n";
}
test();
/* <============================ END CONSTANT ============================> */
