<?php
 $var = '5674';	
 //$var = $_COOKIE['sdsds']['0'];	
 
 echo "<pre/>";
 $preg =  preg_replace('/[^-a-zA-Z0-9_]/', '', $var);
 
 echo "preg_replace  -----> ".$preg;
 
 echo "<pre/>";
 if($preg){
     $preg = "12SDWEWE";
	 $preg = (string)$preg;
		echo "string  -----> ".$preg;
 }
  
  echo "<pre/>";

  echo "23456";
  
 echo "<pre/>";
 echo settype($var, 'string');
 
 
 
 echo "<pre/>";
 echo  htmlentities($var);
?>