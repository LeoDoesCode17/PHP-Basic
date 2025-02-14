<?php

/* <============================ HELPER ============================> */
class Car{
    public $model;
    public $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }
}

function newLine(){
    echo "\n";
}

function display($message){
    echo $message;
}
/* <============================ END HELPER ============================> */

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
display("Odd numbers in range 1-100:\n");
for($i = 1; $i <= 100; $i++){
    if($i%2 === 0){
        display($i." ");
    }
}
newLine();

//We can break the for loop if a condition is satisfied by using break keyword
//Example: perform linear searching
$target = 10;
$arr = [1, 2, 5, 6, 1, -1, 10, 2, 3, 4, -1];
display("Using break keyword to perform linear search:\n");
for($i = 0; $i < count($arr); $i++){
    if($arr[$i] === $target){
        display("$target found at index $i\n");
        break;
    }
}
newLine();
/* <============================ END FOR LOOP ============================> */

/* <============================ FOREACH ============================> */
//foreach iterate through for each element in an array
$arr = [1, 2, 3, 4, 5, 6, 6];
display("Iterate array using foreach:\n");
foreach($arr as $number){
    display("$number\n");
}
newLine();

//foreach using key-value (for associative array and object)
$arr = [
    'name' => 'Leonardo',
    'id' => 'D121221020'
];
display("Iterate associative array using foreach:\n");
foreach($arr as $key => $val){
    display("$key: $val\n");
}
newLine();

$car = new Car('Volvo', 'Red');
display("Iterate car object using foreach:\n");
foreach($car as $prop => $val){
    display("$prop: $val\n");
}
newLine();

/*
When change an item using foreach loop, it doesn't effect the original array
We can modifiy item in array using foreach loop by adding & symbol in the item declaration in foreach loop
This method is called foreach byref, the array item are asigned by reference
*/
$arr = [1, 2, 3, 4, 5, 6];
foreach($arr as &$number){
    if($number%2 == 1){
        $number -= 1;
    }
}
//now $arr = [0, 2, 2, 4, 4, 6]
var_dump($arr);
/* <============================ END FOREACH ============================> */

