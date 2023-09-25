<?php
// proprities
class fruit{
    public $name;
    public $color;
    // __constructor
   function __construct(){
    $this->name;
   }
   function __destruct()
   {
    echo "the fruit is {$this->name}.";
   }

    function get_name(){
        return $this->$name;
    }
}
$apple =new fruit("apple");

?>