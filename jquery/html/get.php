<!DOCTYPE>
<html>
	<head>
		<title>One</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<div id="myDiv" title="sm"><div>Some Testing Module First</div><div>Some Testing Module Second</div></div>
		<input type="text" name="nm" id="nm" value="Murugesan">
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			var str = $("#myDiv").text();
			var str1 = $("#myDiv").html();
			var str2 = $("#myDiv").attr("title");
			var str3 = $("#nm").val();
			//var str2 = $("#myDiv").append("test");
			alert(str);
			alert(str1);
			alert(str2);
			alert(str3);
			//alert(str2);
		});
		
	</script>
</html>