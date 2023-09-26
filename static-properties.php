<?php
class pi{
    public static $value=3.14;
}
class x extends pi {
    public function xstatic(){
        return parent::$value;
    
    }
}

//  get the value of a static proprety via childe class
echo x::$value;



$x =new x();
echo $x->xstatic();