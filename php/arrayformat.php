<?php
$a = array("10", "15", 2=>array("13" => "15"), "e", "f");
echo "<pre/>";
print_r($a);

$b = "['0':10,'1':15,'2':{'13':15},'3':'e','4':'f']";
echo "<pre/>";
echo $b;

$c = json_encode($a);

echo "<pre/>";
echo $c;
?>