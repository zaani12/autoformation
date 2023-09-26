<?php
abstract class parentClass {
    abstract protected function prefixName($name);

}
class childClass extends parentClass {
    public function prifixName($name,$separrtor = "." , $greet = "dear"){
        if($name == "john doe"){
            $prefix = "Mr";

        }elseif($name = "jahe doe "){
            $prefix = "Mrs";

        }else{
            $prefix = "";

        }
        return "{$greet}{$prefix}{$separator} {$name }"
    }   
}
$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>