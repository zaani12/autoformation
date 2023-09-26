<?php

class fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
    $this->name = $name;
    $this->color = $color;
    }
    protected function intro(){
        echo "the fruit is {$this->$name} and the color is {$this->color}."

    }

}
class strawberry extends fruit{
    public function message() {
        echo "am i a fruit or a berry ?";

    }
}
// try to call all three method from outside class 
$strawberry = new starwberry("trawberry", "red") ; 
$strawberry->message();
$strawberry-intro();
?>