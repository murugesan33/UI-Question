<!DOCTYPE html>
<html>
	<head>
		<title>Hosting</title>
	</head>
	<body>
		<div>
			Hoisting is the JavaScript default behaviour 
			of moving all variable and function declarations 
			to the top of the current scope (current script / current function)
		</div>
	<body>
	<script type="text/javascript">
		foo();

		function foo() {
		  alert("Hello!");
		}	
		
		foo();

		var foo = function() {
		  alert("Hello!");
		};

		(function() {
		  var foo;
		  var bar;
		  var baz;

		  foo = 1;
		  alert(foo + " " + bar + " " + baz);
		  bar = 2;
		  baz = 3;
		})();
	</script>
</html>