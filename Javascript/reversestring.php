<!DOCTYPE html>
<html>
	<head>
		<title>Typeof</title>
	</head>
	<body>
		<div id="strTxt"></div>
	<body>
	<script type="text/javascript">
		var str = "Welcome to the javascript Guide!";
		var tarr = str.split("").reverse().join("").split(" ").reverse().join(" ");
		document.write(tarr);
		console.log(str.split(""));
		console.log(str.split("").reverse());
		console.log(str.split("").reverse().join(""));
		console.log(str.split("").reverse().join("").split(" "));
		console.log(str.split("").reverse().join("").split(" ").reverse());
		console.log(str.split("").reverse().join("").split(" ").reverse().join(" "));
	</script>
</html>