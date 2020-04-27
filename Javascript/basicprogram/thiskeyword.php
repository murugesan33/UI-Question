<!DOCTYPE html>
<html>
	<head>
		<title>This keyword in Javascript</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var obj = { outerWidth : 20 };
 
		function say() {
			alert(this.outerWidth);
		}
		 
		say();//will alert window.outerWidth
		say.apply(obj);//will alert obj.outerWidth
	</script>
</html>