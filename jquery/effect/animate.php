<!DOCTYPE html>
<html>
	<head>
		<title>Animate Method</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		 <p>Syntax for $("p").animate({param},speed,callback)</p>
		 <button name="btnclick" id="btnclick">Click Me!</button>
		<div id="div1" style="width:150px;height:75px;background-color:red;border:1px solid grey;barder-radius:3px;position:relative;">
			Murugesan Subbiah
		<div>
	</body>
	<script>
		$(document).ready(function(){
			
			$("#btnclick").on("click", function(){
				//alert('welcome');	
				$("#div1").animate(
					{
						"left":"300px",
						"width":"500px",
						"height":"200px",
						"font-size":"20px"
					},"1000");
			});
		})
	</script>
</html>