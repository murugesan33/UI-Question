<!DOCTYPE>
<html>
	<head>
		<title>One</title>
		<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<table border="1" cellspacing="2" cellpadding="2" id="mytable">
			<tr id="r_1"><td id="1_1">Kavitha</td><td id="1_2">Geetha</td><td id="1_3">Sumathi</td></tr>
			<tr id="r_2"><td id="2_1">Vasanthi</td><td id="2_2">Viji</td><td id="2_3">Murugesh</td></tr>
			<tr id="r_3"><td id="3_1">Priya</td><td id="3_2">Rajkumar</td><td id="3_3">Venki</td></tr>
			<tr id="r_4"><td id="4_1">Lakshmi</td><td id="4_2">Rajesh</td><td id="4_3">Aarthi</td></tr>
			<tr id="r_5"><td id="5_1">Siva</td><td id="5_2">Muthu</td><td id="5_3">Harish</td></tr>
			<tr id="r_6"><td id="6_1">Jana</td><td id="6_2">Sudhiksha</td></tr>
		</table>
		<br><br>
		<table>
			<tr><td>Row<td><td><input type="text" name="row" id="row"><td></tr>
			<tr><td>column<td><td><input type="text" name="column" id="column"><td></tr>
		</table>
		<button type="button" name="clickme" id="clickme">Click Me</button>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#clickme").on("click", function(){
				var rw = $("#row").val();
				var cl = $("#column").val();
				alert($("#"+rw+"_"+cl).text());
				//alert(document.getElementById("mytable").rows[rw].cells[cl].innerHTML)
			});
		});
	</script>
</html>