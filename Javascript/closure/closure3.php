<!DOCTYPE html>
<html>
	<head>
		<title>Closure Three</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		function a()
		{
			 return {
						b : function b(){
							console.log("b => Bangalore");
						},
						c: function c(){
							console.log("c => Cat");
						},
						d: function d(){
							console.log("d => donkey");
						},
						e: function e(){
							console.log("e => Elephant");
						}
				}
			 
		}
		var str = a();
		console.log(str);
		str.b();
		str.c();
		str.e();
		str.d();
	</script>
</html>