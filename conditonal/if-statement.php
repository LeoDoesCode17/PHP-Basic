<?php

/* <============================ HELPER ============================> */
function checkParity($x){
    $isEven = $x%2 === 0;
    if($isEven){
        //if this true then execute this block
        echo "$x is even\n";
    }else{
        //if false then execute this block
        echo "$x is odd\n";
    }
}
/* <============================ END HELPER ============================> */


/* <============================ IF-ELSE STATEMENT ============================> */
$x = 2;
checkParity($x);
$y = 3;
checkParity($y);
/* <============================ END IF-ELSE STATEMENT ============================> */
