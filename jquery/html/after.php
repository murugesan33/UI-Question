<!DOCTYPE html>
<html>
	<head>
		<title>After Method</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<div id="txt" style="border:1px solid red;">
			<p>First</p>
		</div>
	</body>
	<script>
		$("#txt").after("<p>Second</p>");
	</script>
</html>

