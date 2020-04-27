<!DOCTYPE html>
<html>
	<head>
		<title>Closure</title>
	</head>
	<body>
		<div>The closure is a function having access to the parent scope even after the parent function is closed</div>
	<body>
	<script type="text/javascript">
		var add = (function () {
			var counter = 0;
			return function () {console.log(counter += 1);}
		})();

		add();
		add();
		add();
	</script>
</html>