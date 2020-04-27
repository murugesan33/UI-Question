<!DOCTYPE html>
<html>
	<head>
		<title>Sample function</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		b=5;
		function c(){
			var b =10;
		}
		var b;
		console.log(b);
		
		function x() {
		  y = 1;   // Throws a ReferenceError in strict mode
		  var z = 2;
		  console.log(z);
		}

		x();

		console.log(y); // logs "1" 
		console.log(z); // Throws a ReferenceError: z is not defined outside x
	</script>
</html>