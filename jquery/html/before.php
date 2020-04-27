<!DOCTYPE html>
<html>
	<head>
		<title>Before Method</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<div id="txt" style="border:2px solid Green;">
			<p>First</p>
		</div>
	</body>
	<script>
		$("#txt").before("<p>Before First</p>");
	</script>
</html>

