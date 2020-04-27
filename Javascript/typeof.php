<!DOCTYPE html>
<html>
	<head>
		<title>Typeof</title>
	</head>
	<body>
		<div id="str"></div>
	<body>
	<script type="text/javascript">
		console.log("underfiend ==="+typeof undefined);
		console.log("null===="+typeof null);
		console.log("Empty==="+typeof '');
		console.log("string==="+typeof 'Murugesan');
		console.log("Number==="+typeof 123);
		console.log("Boolean=="+typeof true);
		console.log("Zero===="+typeof 0);
		console.log("Object=="+typeof {a:"10",b:"20"});
		console.log("Array==="+typeof [20,30,40]);
		console.log("String format==="+typeof "Volvo XC60");
		console.log("String format==="+typeof "60 Volvo XC");
		console.log("String format==="+typeof 34.45);
		console.log("Numreic==="+typeof 123e5);
		console.log("function==="+typeof function(){});
	</script>
</html>