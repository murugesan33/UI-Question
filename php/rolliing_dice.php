<?php 

function playgame($players,$round)
{
	
	foreach($players as $playername => $totaldisc) {
		$roundresult = startgame($playername,$totaldisc);
		//echo "<pre>"; print_r($roundresult); echo $roundresult[2];
		if($roundresult[2] != 0) {
			$remainingplayers[$playername] = $roundresult[2];
		}
		$finalresult['Round'.$round][$playername] = $roundresult;
		
		//echo "<pre>"; print_r($finalresult);
	}
	
	if(!empty($remainingplayers))
	{
		playgame($remainingplayers,$round+1);
	}
	
	echo "<pre>"; print_r($finalresult);
	
	displayResult($finalresult,$round);
	
	//return $finalresult;
}

function displayResult($finalresult,$round)
{
	echo "<br><br>";
	echo 'Round '.$round."<br>";
	echo 'After dice rolled<br>';
	//print_r($finalresult);
	
	foreach($finalresult as $displayresult) { 
	
		foreach($displayresult as $keyplayer => $playervalue) {
			if(!empty($playervalue[0])) {
			echo $keyplayer." : ".implode(',',$playervalue[0])."<br>";
			}
		}
	
	}
	echo 'After dice moved/removed:<br>';	
	foreach($finalresult as $displayresult) { 
	
		foreach($displayresult as $keyplayer => $playervalue) {
			if(!empty($playervalue[1])) {
			echo $keyplayer." : ".implode(',',$playervalue[1])."<br>";
			}
		}
	
	}	
}

function startgame($player,$totaldisc)
{
		$discrolled = array(); $discmoved = array();
		for($i = 1 ;$i<$totaldisc;$i++) {
				$discvalue = rand(1,6);
					$discrolled[] = $discvalue;
				if($discvalue != 6) {
					$discmoved[] = $discvalue;
				}
		}
		return array($discrolled,$discmoved,count($discmoved));
}

$players = array('player1'=> 6,'player2' => 6,'player3' => 6,'player4'=>6);

$finalresult = playgame($players,1);

//echo "<pre>"; print_r($finalresult);

?>