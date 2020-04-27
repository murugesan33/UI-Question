<!DOCTYPE html>
<html>
	<head>
		<title>Selector</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<p>Murugesh is the good boy</p>
		<div style="border:1px solid;">
			<p>Sam is the bad boy</p>
			<p>Rakesh is the bad boy</p>
		</div>
		<div style="border:2px solid;margin-top:10px;">
			<span>Muthu is the bad boy</span>
			<p>kamesh is the bad boy</p>
		</div>
		<p>Rajesh is the good boy</p>
	</body>
	<script>
		$("p:first-child").css("background-color","red");
	</script>
</html>
