<!DOCTYPE html>
<html>
	<head>
		<title>simple Encapsulation</title>
	</head>
	<body>
		<div>Encapsulation: Its capability of storing related information, about data or methods,
			 mutually in a single object.
			 </div>
		<script>
			(function(){
				var x = 'Murugesan';
				function myfunction(){
					alert("Hello "+x);
				}
				myfunction();	
				alert(typeof x);
				alert(typeof myfunction);
			})();
			alert(typeof x);
			alert(typeof myfunction);
		</script>
	</body>
</html>