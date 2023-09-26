<?php
// interface difinition
interface animal{
    public function makeSounde();
}
// class difinition 
class catt implements animal{
    public function makeSounde(){
        echo "meow";
    }
}
class dog implements animal{
    public function makeSounde(){
        echo "brak";
    }
}class mouse implements animal{
    public function makeSounde(){
        echo "squeak";
    }
}
//  creat a list of animals 
$cat = new cat cat();
$dog = new dog (); 
$mouse = new mouse():
$animals = array($cat, $dog, $mouse)

//  tell the animals to make sound 
foreach($animals as $animal){
    $animal->makeSounde();
}
?>