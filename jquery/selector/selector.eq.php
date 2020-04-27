<!DOCTYPE html>
<html>
	<head>
		<title>Eq</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<p>First Element</p>
		<p>Second Element</p>
		<p>Third Element</p>
		<div style="border:1px solid green;">
			<p>First Element</p>
			<p>Second Element</p>
			<p>Third Element</p>
			<div style="border: 1px solid red;">
				<p>First Element</p>
				<p>Second Element</p>
				<p>Third Element</p>
			</div>
		</div>
	</body>
	<script>
		$("div p:eq(2)").css("background-color","yellow");
	</script>
</html>

