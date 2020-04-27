<!DOCTYPE html>
<html>
	<head>
		<title>func argument with Closure concept</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		function sum(){
			var s = 0;
			console.log(arguments.length);
			for(var i=0;i<arguments.length;i++){
				s +=  arguments[i];
			}	
			console.log("function arguments");
			console.log(s);
		}
		function xyz(a){
			return function (b){
				return function (c){
					return function (d){
						return a+b+c+d;
					}
				}
				
			}	
			
		}	
		sum(1,2);
		sum(1,2,3,4,5,6,7);
		console.log("closure");
		
		console.log(xyz(1)(2)(3)(4));
		
	</script>
</html>