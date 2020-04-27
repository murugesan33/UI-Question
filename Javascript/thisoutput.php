<!DOCTYPE html>
<html>
	<head>
		<title>Condition</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		console.log(this);		
		var  str = add(1);	
		console.log(str);
		function add(s){
			return this;
		}	
	</script>
</html>