<!DOCTYPE html>
<html>
	<head>
		<title>nth-last-child</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
		<script>
		$(document).ready(function(){
			$("p:nth-last-child(2)").css("background-color", "yellow");
		});
	</script>
	</head>
	<body>
		<p>First Element</p>
		<p>Second Element</p>
		<p>Third Element</p>
		<p>Four Element</p>
		<div style="border:1px solid green;">
			<p>Second Element</p>
			<span>First Element</span>
			<p>Third Element</p>
			<p>Four Element</p>
			<div style="border: 1px solid red;">
				<p>First Element</p>
				<p>Second Element</p>
				<p>Third Element</p>
				<p>Four Element</p>
			</div>
		</div>
		<p>fifth Element</p>
		<p>sixth Element</p>
	</body>
</html>

