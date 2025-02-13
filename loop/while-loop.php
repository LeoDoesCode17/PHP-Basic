<?php

/* <============================ WHILE LOOP ============================> */
//while loop keep execute the same block untill a condition is reached or the conditions is false

//Example: find binary of an integer
$res = '';
$number = 10;
while($number > 0){
    $q = $number%2;
    $res = $q . $res;
    $number = (int)($number/2);
}
echo $res;

/*
Explanation :
the code inside the while will still executed until $number reach 0
Condition : $number > 0
Update : $number = $number / 2
*/
/* <============================ END WHILE LOOP ============================> */
