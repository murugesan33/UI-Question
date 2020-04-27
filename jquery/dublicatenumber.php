<!DOCTYPE html>
<html>
	<head>
		<title>Duplicate Number</title>
		<script type="text/javascript" src="./jquery-1.8.2.min.js"></script>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var arr = [2, -1, 3, 4, 3, 5, 7.5, 9, 2, 3, 2, 9, -1, 7.5, 100, 11];
		var sorted_arr = arr.sort(function(a, b){return a-b}); 
		console.log(sorted_arr);
		
			// You can define the comparing function here. 
            // JS by default uses a crappy string compare.
            // (we use slice to clone the array so the
            // original array won't be modified)
		var results = [];
		for (var i = 0; i < sorted_arr.length - 1; i++) {
			if (sorted_arr[i + 1] == sorted_arr[i]) {
				if($.inArray(sorted_arr[i], results) == -1)
				results.push(sorted_arr[i]);
				
			}
		}

		console.log(results);	
	</script>
</html>


