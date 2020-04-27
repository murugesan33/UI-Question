<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<head>
		<title>Self Invoking Function</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var x = 100;
		var obj = {"age":32};
		function budgetController(){
			var x = 23;
			var abc = function(){
				var a = 5;
				return x + a;
			}
			var obj ={
				"age":35,
				"sex":"male"
			}	
		}
		budgetController();		
		//console.log(x);
		//console.log(abc);
		console.log(obj);
	</script>
</html>