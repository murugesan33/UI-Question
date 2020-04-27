<!DOCTYPE html>
<html>
	<head>
		<title>First of type</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<p>ABCD</p>
		<div style="border:1px solid;">
			<p>HHHHR</p>
			<p>WIOOOR</p>
		</div>
		<div style="border:2px solid;margin-top:10px;">
			<span>KKLLL</span>
			<p>OPIUT</p>
			<p>EERRT</p>
		</div>
		<p>MMRRR</p>
	</body>
	<script>
		$("p:first-of-type").css("background-color","red");
	</script>
</html>
