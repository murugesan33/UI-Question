<!DOCTYPE html>
	<head>
		<title>Two</title>
	</head>
	<body>
		<p id="strName"> </p>
	</body>
	<script type="text/javascript">
		sessionStorage.setItem("fname", "Murugesan");
		sessionStorage.setItem("lname", "Subbiah");
		var fname = sessionStorage.getItem("fname");
		sessionStorage.removeItem("lname");
		var lname = sessionStorage.getItem("lname");
		document.write("My name :"+fname+" "+lname);
	</script>
</html>