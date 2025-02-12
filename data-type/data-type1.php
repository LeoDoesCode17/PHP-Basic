<?php

/*
Data type in PHP
1. String
2. Integer
3. Float
4. Boolean
5. Array
6. Object
7. NULL
8. Resource

To get data type : gettype($var) or var_dump($var)
*/

/* <============================ DATA TYPE LIST ============================> */
$x = 5;
echo 'data type of $x is : '.gettype($x)."\n";

$y = 'Leonardo';
echo 'data type of $y is : '.gettype($y)."\n";

$z = 10.5;
echo 'data type of $z is : '.gettype($z)."\n";

$a = true;
echo 'data type of $a is : '.gettype($a)."\n";

$b = array('PHP', 'Java', 'Python');
echo 'data type of $b is : '.gettype($b)."\n";

$c = NULL;
echo 'data type of $c is : '.gettype($c)."\n";

$d = fopen('data-type/object.php', 'r');
echo 'data type of $d is : '.gettype($d)."\n";
/* <============================ END DATA TYPE LIST ============================> */

/* <============================ CHANGE DATA TYPE ============================> */
$x = 'leo';
echo 'data type of $x now is : '.gettype($x)."\n";
/* <============================ END CHANGE DATA TYPE ============================> */
