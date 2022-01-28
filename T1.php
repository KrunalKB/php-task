<?php 
   $ary = array("1","2","3","4","5","6","7","8","9","10");
   
   foreach($ary as $value){
       if($value == 10){
           echo $value;
       }else{
           echo $value . "-";
       }
       
   }
?>