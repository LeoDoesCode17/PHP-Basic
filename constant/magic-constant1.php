<?php
/* <============================ HELPER ============================> */
namespace myArea; //the lines below are inside this namespace

trait message{
    public function getTraitMessage(){
        return __TRAIT__;
    } 
}

class Car{

    //this is how to use a trait
    use message;

    public $model;
    public $color;
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }
    public function info(){
        echo "Your car is $this->model model with $this->color color\n\n";
    }
    public function getName(){
        return __CLASS__;
    }
    public function getMethod(){
        return __METHOD__;
    }
}

function testFunction(){
    return __FUNCTION__;
}

function display($message){
    echo $message."\n\n";
}
/* <============================ END HELPER ============================> */

/* <============================ MAGIC CONSTANT ============================> */
//PHP has nine predefined constants that change value depending on where they used
//These nine constants are called "Magic Constants"

//__CLASS__
//if used inside a class, the class name is returned
$car = new Car('Volvo', 'Red');
display("Using __CLASS__: ".$car->getName());

//__DIR__
//this constant returns the path of this source code in our computer
display("Using __DIR__: ".__DIR__);

//__FILE__
//this constant returns the path of this source code + the name in our computer
display("Using __FILE__: ".__FILE__);

//__FUNCTION__
//if this constant is used inside a function, it returns the name of the function
//else returns nothing
display("Using __FUNCTION__: ".testFunction());

//__LINE__
//this constant returns the current line number (the line number where this constant is called)
display("Using __LINE__: ".__LINE__);

//__METHOD__
//this constant is used inside a method of a class, returns the method and class name
display("Using __METHOD__: ".$car->getMethod());

//__NAMESPACE__
//this constant is used inside a namespace, returns the namespace name
display("Using __NAMESPACE__: ".__NAMESPACE__);

//__TRAIT__
//this constant is used inside a trait, returns the name of the trait (plus namespace if the trait inside a namespace)
//what is trait?
//trait is mechanism of php to reduce limitation of sigle inheritance (allow a class to have method from other place, not only from its parent)
display("Using __TRAIT__: ".$car->getTraitMessage());

//ClassName::class
//this returns the name of the specified class and the namespace (if the class inside a namespace)
display("Using Car::class: ".Car::class);
/* <============================ END MAGIC CONSTANT ============================> */
