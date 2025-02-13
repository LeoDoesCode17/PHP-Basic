<?php

/* <============================ HELPER ============================> */
/* <============================ END HELPER ============================> */

/* <============================ SWITCH STATEMENT ============================> */
/*
switch statement checks the value of a variable and execute the block where the value mathces
if no value mathces then default block will be executed
*/
$x = 5;
$y = 0;
switch($x){
    case 1:
        $y = $x + 1;
        break;
    case 2:
        $y = $x + 2;
        break;
    case 3:
        $y = $x + 3;
        break;
    case 4:
        $y = $x + 4;
        break;
    case 5:
        $y = $x + 5;
        break;
    default:
        $y = 999;
        break;
}
echo $y; //output: 10;
/* <============================ END SWITCH STATEMENT ============================> */
