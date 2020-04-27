<!DOCTYPE html>
<html>
	<head>
		<title>Closure Three</title>
	</head>
	<body>
		<input type="text" name="email" id="email" value="" />
		<input type="button" name="btn" id="btn" value="click" onclick="validate();"/>
	<body>
	<script type="text/javascript">
		function validate(){
			var email = document.getElementById('email').value;
			var regex = "/^([A-Za-z0-9])+\@([A-Za-z0-9])+\.([A-Za-z]{$2,$4})$/";
			var est = regex.match(email);
			alert(est);
		}	
		
	</script>
</html>