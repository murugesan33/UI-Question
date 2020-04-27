<?php
$strArray = array(2, 1, 3, 4, 3, 5, 10, 8, 4, 5, 100,22, 1);
echo "<pre/>";
print_r(array_count_values($strArray));

map[string -> int] $m;
foreach($word in $array)
{
    if(!$m.contains($word))
        $m[$word] = 0;

    $m[$word] += 1;
}
echo "<pre/>";
print_r($m);



$pusharr='';
$lenCount = count($strArray); 
for($i=0;$i<count($strArray);$i++){
	for($k=$i + 1;$k<count($strArray);$k++){
		if($strArray[$i] == $strArray[$k]){
			$pusharr .= $strArray[$i].", ";	
		}
	}
}
echo "<pre/>";
echo rtrim($pusharr,', ');
?>