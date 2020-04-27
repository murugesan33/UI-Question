<?php
	$str = "testing, suspended, open";
	$arrStatus = explode(",", $str);
	$strStatus = implode(",",array_fill(0,count($arrStatus),'?'));
	echo "<pre/>";
	print_r($arrStatus);
	echo "<pre/>";
	echo $strStatus;
	
?>		 