<?php

/* <============================ WHILE LOOP ============================> */
/*
While loop keep execute the same block untill a condition is reached or the conditions is false
Check first then execute
Example: find binary of an integer
*/
$res = '';
$number = 10;
while($number > 0){
    $q = $number%2;
    $res = $q . $res;
    $number = (int)($number/2);
}
echo "While loop:\n".$res."\n\n";

/*
Explanation :
the code inside the while will still executed until $number reach 0
Condition : $number > 0
Update : $number = $number / 2
*/
/* <============================ END WHILE LOOP ============================> */


/* <============================ DO WHILE LOOP ============================> */
/*
Do while loop execute the block first then check for the condition
Example: find binary of a number
*/
$res = '';
$number = 10;
do{
    $q = $number%2;
    $res = $q . $res;
    $number = (int)($number/2);
}while($number > 0);
echo "Do while loop:\n".$res."\n\n";
/* <============================ END DO WHILE LOOP ============================> */

