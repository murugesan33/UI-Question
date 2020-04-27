<!DOCTYPE html>
<html>
	<head>
		<title>Example Array</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var arrayList = ['a','b','c','d','e','f']; // Created array 
		var anotherArrayList = arrayList;  // Referenced arrayList by another variable 
		arrayList = []; // Empty the array 
		console.log(anotherArrayList); // Output ['a','b','c','d','e','f']
		console.log(arrayList);
		
		
		console.log("Another Type Method for Make Empty Array");
		var arrayList1 = ['g','h','i','j','k','l']; // Created array 
		var anotherArrayList1 = arrayList1;
		arrayList1.length = 0; // Empty the array 
		console.log(anotherArrayList1); 
		console.log(arrayList1);
		console.log(typeof(arrayList1));
	</script>
</html>