<?php
$str = 'TestCode12_1';
$findme = '_';
$pos = strpos($str, $findme);
$item = substr($str, ($pos+1)); 
$ques = substr($str, 0,($pos+1));
echo $pos."==".$item."===".$ques;
?>