<?php
$str = "choiceopen[[9]]";
$str = str_replace("choiceopen[[", "", str_replace("]]","",$str));
echo $str;

?>