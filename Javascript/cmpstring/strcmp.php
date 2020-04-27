<!DOCTYPE html>
	<head>
		<title>One</title>
		<script type="text/javascript">
			
			function getDetails(){
				//alert('welcome to all');
				var str1 = document.getElementById('str1').value;
				var str2 = document.getElementById('str2').value;
				var str1Diff ="";
				for (var i = 0, len = str1.length; i<len; i++){
					//alert(str1[i]+"==="+i+"==="+str2.search(str1[i]));
					if(str2.search(str1[i]) == -1){
						str1Diff += str1[i];
					}
				}
				
				var str2Diff ="";
				for (var k = 0, len = str2.length; k<len; k++){
					//alert(str2[k]+"==="+k+"==="+str1.search(str2[k]));
					if(str1.search(str2[k]) == -1){
						str2Diff += str2[k];
					}
				}
				document.getElementById('otp1').value = str1Diff;
				document.getElementById('otp2').value = str2Diff;
			}
		</script>
	</head>
	<body>
		<table>
			<tr>
				<td>String 1</td>
				<td><input type="text" name="str1" id="str1"></td>
			</tr>
			<tr>
				<td>String 2</td>
				<td><input type="text" name="str2" id="str2"></td>
			</tr>
			<tr>
				<td>Output 1</td>
				<td><input type="text" name="otp1" id="otp1"></td>
			</tr>
			<tr>
				<td>Output 2</td>
				<td><input type="text" name="otp2" id="otp2"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" name="clickme" id="clickme" value="Click Me" onclick="getDetails();"></td>
			</tr>
		</table>
	</body>
</html>