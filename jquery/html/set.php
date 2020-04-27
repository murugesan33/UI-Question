<!DOCTYPE html>
<html>
	<head>
		<title>Set Method</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<div id="str1">Murugesan is a <b>good</b> boy</div>
		<div id="str2">Murugesan is a <b>good</b> boy</div>
	<body>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#str1").text("Murugesan is a <b>bad</b> boy")
			$("#str2").html("Murugesan is a <b>bad</b> boy")
		})		
	</script>
</html>