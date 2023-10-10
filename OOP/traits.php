<?php
 trait message1 {
    public function msg1(){
        echo "opp is fun!";

    
    }
   
 }
 trait message12{
    public function msg2(){
    echo "OOP reduces code duplication!!";


    }
    
 }

 class weclome {
    use message1, message1 ;
 }
  $obcejt = new welcome();
  $obcejt->msg1();
   echo "<br>";

   $obcejt2 = new welcome2();
   $obcejt2-> msg1();
   $obcejt2-> msg2();
   


