<!DOCTYPE>
<html>
	<head>
		<title>One</title>
		<script type="text/javascript" src="./jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<div id="myDiv"></div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#myDiv").html(navigator.userAgent);
			alert(navigator.userAgent.toLowerCase());
		});
	</script>
</html>