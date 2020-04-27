<!DOCTYPE html>
<html>
	<head>
		<title>Selector</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<div>1 odd</div>
		<div>2 even</div>
		<div>3 odd</div>
		<div>4 even</div>
		<div>5 odd</div>
		<div>6 even</div>
	</body>
	<script>
		$("div:even").css("background-color","red");
	</script>
</html>
