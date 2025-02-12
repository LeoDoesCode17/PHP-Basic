<?php

/* <============================ CASTING ============================> */
//Casting is when you convert a variable value from one data type to another data type
/*
(int) => convert variable to int data type
(float) => convert variable to float data type
(bool) => convert variable to boolean data type
(string) => convert variable to string data type
(array) => convert variable to array data type
(object) => convert variable to object data type
(unset) => convert variable to null data type (deprecated in PHP 8)
*/
/* <============================ END CASTING ============================> */

/* <============================ HELPER FUNCTION ============================> */
function toInt($val){
    $new = (int)$val;
    return $new;
}
function toFloat($val){
    $new = (float)$val;
    return $new;
}
function toString($val){
    $new = (string)$val;
    return $new;
}
function toBool($val){
    $new = (bool)$val;
    return $new;
}
function toArray($val){
    $new = (array)$val;
    return $new;
}
function toObject($val){
    $new = (object)$val;
    return $new;
}

/* <============================ END HELPER FUNCTION ============================> */

class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function info(){
        echo "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$intVal = 5;
$floatVal = 5.5;
$stringVal = 'test';
$boolVal = true;
$nullVal = null;
$arrVal = [1, 2, 3, 4];
$objVal = new Car('Red', 'Volvo');

/* <============================ INT CASTING ============================> */
echo '$floatVal to Int: '.toInt($floatVal)."\n"; //output: 5
echo '$stringVal to Int: '.toInt($stringVal)."\n"; //output: 0
echo '$boolVal to Int: '.toInt($boolVal)."\n"; //output: 1
echo '$nullVal to Int: '.toInt($nullVal)."\n\n"; //output: 0
/* <============================ END INT CASTING ============================> */

/* <============================ FLOAT CASTING ============================> */
echo '$intVal to Float: '.toFloat($intVal)."\n"; //output: 5
echo '$stringVal to Float: '.toFloat($stringVal)."\n"; //output: 0
echo '$boolVal to Float: '.toFloat($boolVal)."\n"; //output: 1
echo '$nullVal to Float: '.toFloat($nullVal)."\n\n"; //output: 0
/* <============================ END FLOAT CASTING ============================> */

/* <============================ STRING CASTING ============================> */
echo '$intVal to String: '.toString($intVal)."\n"; //output: 5
echo '$floatVal to String: '.toString($floatVal)."\n"; //output: 5.5
echo '$boolVal to String: '.toString($boolVal)."\n"; //output: 1
echo '$nullVal to String: '.toString($nullVal)."\n\n"; //output: nothing
/* <============================ END STRING CASTING ============================> */

/* <============================ BOOLEAN CASTING ============================> */
echo '$intVal to Boolean: '.toBool($intVal)."\n"; //output: 1
echo '$floatVal to Boolean: '.toBool($floatVal)."\n"; //output: 1
echo '$stringVal to Boolean: '.toBool($stringVal)."\n"; //output: 1
echo '$nullVal to Boolean: '.toBool($nullVal)."\n"; //output: nothing => false?
echo '$arrVal to Boolean: '.toBool($arrVal)."\n"; //output: 1
echo '$objVal to Boolean: '.toBool($objVal)."\n\n"; //output: nothing => true?
/* <============================ END BOOLEAN CASTING ============================> */

/* <============================ ARRAY CASTING ============================> */
echo '$intVal to Array: '.toArray($intVal)[0]."\n"; 
echo '$floatVal to Array: '.toArray($floatVal)[0]."\n";
echo '$stringVal to Array: '.toArray($stringVal)[0]."\n";
echo '$nullVal to Array: '.toArray($nullVal)."\n"; //output: empty array
echo '$boolVal to Array: '.toArray($boolVal)[0]."\n"; 
echo '$objVal to Array: '.toArray($objVal)."\n\n"; //output: associative array
/* <============================ END ARRAY CASTING ============================> */

/* <============================ OBJECT CASTING ============================> */
/*
When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.

NULL values converts to an empty object.

Indexed arrays converts into objects with the index number as property name and the value as property value.

Associative arrays converts into objects with the keys as property names and values as property values.
*/
echo '$intVal to Object: '.gettype(toObject($intVal))."\n";
echo 'Scalar of object $intVal: '.toObject($intVal)->scalar."\n\n"; 
echo '$floatVal to Object: '.gettype(toObject($floatVal))."\n";
echo 'Scalar of object $floatVal: '.toObject($floatVal)->scalar."\n\n";
echo '$stringVal to Object: '.gettype(toObject($stringVal))."\n";
echo 'Scalar of object $stringVal: '.toObject($stringVal)->scalar."\n\n";
echo '$nullVal to Object: '.gettype(toObject($nullVal))."\n\n";
echo '$boolVal to Object: '.gettype(toObject($boolVal))."\n"; 
echo 'Scalar of object $boolVal: '.toObject($boolVal)->scalar."\n\n";
echo '$arrVal to Object: '.gettype(toObject($arrVal))."\n";
echo 'Value (first index as property) of object $arrVal: '.toObject($arrVal)->{0}."\n\n";
/* <============================ END OBJECT CASTING ============================> */





