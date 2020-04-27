<?php
	$str = "Welcome to I-link Researchs Solutions Pvt. Ltd.,      @@@  ###   $$$  %%%";
	$arr = explode(" ",$str,4);
	echo "<pre/>";
	echo "With Limit";
	echo "<pre/>";
	print_r($arr);
	
	
	echo "<pre/>";
	echo "Without Limit";
	$arr = explode(" ",$str);
	echo "<pre/>";
	print_r($arr);

?>