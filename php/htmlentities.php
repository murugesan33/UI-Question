<?php
$str = "<label> MURU<b>G</b>ESAN </label> * ( ) @ # $ %";
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str);
echo "<br>";
echo htmlspecialchars($str);
echo "<br>";
echo html_entity_decode($str); 
echo "<br>";
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new;
echo "<br>";
// An imaginary article submission from a bad user
//  it will redirect anyone to example.com if the code is run in a browser
$userInput = "I am going to hax0r your site, hahaha!
	<script type='text/javascript'>
	window.location = 'http://www.example.com/'
	</script>'";
	
//Lets make it safer before we use it
$userInputEntities = htmlentities($userInput);

//Now we can display it
echo $userInputEntities;
?>