<?php
// proprities
class fruit{
    public $name;
    public $color;
    // methods
   function __construct(){
    $this->name;
   }

    function get_name(){
        return $this->$name;
    }
}
$apple =new fruit("apple");
echo $apple->get_name();
?>