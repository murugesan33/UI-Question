<?php
$projectid = "Q887660_ - .xml";
$str =  preg_replace('/[^a-zA-Z0-9]/', '', $projectid);
echo $str;
echo "<br>";
echo preg_match('|Q\d+|', $str);

echo  "<br>";
echo preg_replace('/[^-a-zA-Z0-9_.]/', '', $projectid);


echo "<br>";
echo str_replace('xml', '', preg_replace('/[^a-zA-Z0-9]/', '', $projectid));

$array = array("MMM", "LLL", "EEE", "RRR@#$");
$GH =   preg_replace('/[^a-zA-Z0-9]/', '', $array);
echo "<pre/>";
print_r($GH);
?>