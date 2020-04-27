<!DOCTYPE html>
<html>
	<head>
		<title>$.EACH ITeration</title>
		<script type="text/javascript" src="./jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<script>
			var arr = ["abc", "ball", "cat"];
			var obj = {a:"abc", b:"ball", c: "cat"};
			$.each(arr, function(index, value){
				document.write(index+" =>"+value+"<br>");
			});	
			$.each(obj, function(index, value){
				document.write(index+" =>"+value+"<br>");
			});			
		</script>
	</body>
</html>