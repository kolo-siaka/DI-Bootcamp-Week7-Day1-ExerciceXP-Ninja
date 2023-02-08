<?php 
   require 'ExerciceXP-Gold2 .php';


    function test()
   {
      $user1 = new User();
      $user1 -> firstname ='Jame';
      $val = $user1->hello() ;
      $val1 = $user1-> register(); 
      $val2 = $user1-> mail();
      echo $val,$val1,$val2;
   }
   
  test();
 ?>