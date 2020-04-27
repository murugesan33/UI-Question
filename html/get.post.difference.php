<!DOCTYPE html>
<html>
	<head>
		<title>GET & POST Difference</title>
	</head>
	<body>
		<P>FORM GET METHOD</p>
		<form method="get" name="getform" action="array.php">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>RollNo</td>
					<td><input type="text" name="rollno" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="click" value="Click"></td>
				</tr>
			</table>
		</form>
		<P>FORM POST METHOD</p>
		<form method="POST" name="getform" action="array.php">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>RollNo</td>
					<td><input type="text" name="rollno" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="click" value="Click"></td>
				</tr>
			</table>
		</form>
		<P>Default METHOD</p>
		<form name="getform" action="array.php">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>RollNo</td>
					<td><input type="text" name="rollno" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="click" value="Click"></td>
				</tr>
			</table>
		</form>
	</body>
</html>