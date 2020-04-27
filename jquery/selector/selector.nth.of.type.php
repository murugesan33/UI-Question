<!DOCTYPE html>
<html>
	<head>
		<title>Nth of Type</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<p>First</p>
		<p>Second</p>
		<span>Third</span>
		<p>Four</p>
		<p>Fifth</p>
		<div>
			<p>First</p>
			<span>Second&nbsp;&nbsp;</span>
			<span>Third&nbsp;&nbsp;</span>
			<span>Fourth&nbsp;&nbsp;</span>
			<p>Fifth</p>
			<div>
				<p>First</p>
				<p>second</p>
			</div>
		</div>
	</body>
	<script>
		$("p:nth-of-type(2)").css("background-color","red");
	</script>
</html>