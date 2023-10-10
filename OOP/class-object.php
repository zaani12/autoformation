<?php
// proprities
class fruit{
    public $name;
    public $color;
    // methods
    function set_name($name){
       $this-> name = $name;
    }

    function get_name(){
        return $this->$name;
    }
}
$apple = new fruit();
$banana = new fruit();
$applem->set_name('apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo"<br>";
echo $banana->get_name();