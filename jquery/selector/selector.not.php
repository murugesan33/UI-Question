<!DOCTYPE html>
<html>
	<head>
		<title>not</title>
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
		$("p:not(p:first)").css("background-color","red");
	</script>
</html>

