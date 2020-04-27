<!DOCTYPE html>
<html>
	<head>
		<title>closure with self invoking</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var globalvar = "globalVariable";
		(function outerFunction(outerFunArg){
			var outerVar = "outerVariable";
			(function innerFunction(innerFunArg){
				var innerVar = "innerVariable";
				console.log(globalvar);
				console.log(outerFunArg);
				console.log(outerVar);
				console.log(innerFunArg);
				console.log(innerVar);
			}(7));
		}(10));
	</script>
</html>