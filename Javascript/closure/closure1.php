<!DOCTYPE html>
<html>
	<head>
		<title>Closure One</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		function sayHello(name) {
		  var text = 'Hello ' + name;
		  var say = function(){return text;}
		  return say;
		}
		var say2 =  sayHello('Joe');
		//console.dir(say2);
		console.log(say2());
		
		
	</script>
</html>