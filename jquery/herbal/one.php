<!DOCTYPE>
<html>
	<head>
		<title>One</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<button type="button" name="button1" id="red" value="red" onclick="setcolor(this);">Click Me!</button>
		<button type="button" name="button1" id="green" value="green" onclick="setcolor(this);">Click Me!</button>
		<button type="button" name="button1" id="blue" value="blue" onclick="setcolor(this);">Click Me!</button>
		<button type="button" name="button1" id="orange" value="orange" onclick="setcolor(this);">Click Me!</button>
		<button type="button" name="button1" id="gray" value="gray" onclick="setcolor(this);">Click Me!</button>
		
		<div class="divcls" style="width:50%;">
			Murugesan
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			/*$("#button1").on("click", function(){
				alert('MMM'+"  "+"DDDEEERRR");		
				$(".divcls").css("background-color","red");
			});*/
		});
		function setcolor(event){
			//var clr = $(event).attr('id');	
			var clr = $(event).val();	
			alert(clr);
			$(".divcls").css("background-color",clr);
		}	
	</script>
</html>