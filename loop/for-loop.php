<?php

/* <============================ FOR LOOP ============================> */
/*
For loop execute block of code in a certain times
for(expr1; expr2; expr3){
    task
}
Explanation :
    1. expr1 is evaluated/executed once, when the loop starts
    2. expr2 (this is a condition that returns true or false) is evaluated before iteration, 
    if the condition true then execute task if false then stop the iteration (for loop done)
    3. expr3 is evaluated/executed after each iteration (after done executing task)
*/

//Example: print odd number in range 1 - 100
echo "Odd numbers in range 1-100:\n";
for($i = 1; $i <= 100; $i++){
    if($i%2 === 0){
        echo $i." ";
    }
}
echo "\n";

//We can break the for loop if a condition is satisfied by using break keyword
//Example: perform linear searching
$target = 10;
$arr = [1, 2, 5, 6, 1, -1, 10, 2, 3, 4, -1];
echo "Using break keyword to perform linear search:\n";
for($i = 0; $i < count($arr); $i++){
    if($arr[$i] === $target){
        echo "$target found at index $i\n";
        break;
    }
}
/* <============================ END FOR LOOP ============================> */
