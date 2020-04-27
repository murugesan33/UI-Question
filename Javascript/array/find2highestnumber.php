<!DOCTYPE html>
<html>
	<head>
		<title>Find 2nd Highest Number in Array</title>
	</head>
	<script>
		var elements = [1,-2,5,-6,4,3,7,1,2,201];
		console.log(elements);
		
		
		var largest = -Infinity

		// Find largest 
		for (var i=0; i < elements.length; i++) {
		  if (elements[i] > largest) largest = elements[i]
		}
		
		
		var second_largest = -Infinity
		var second_largest_position = -1

		// Find second largest
		for (var i=0; i < elements.length; i++) {
		  if (elements[i] > second_largest && elements[i] < largest) {
			second_largest = elements[i]
			second_largest_position = i
		  }
		}

		console.log("Second largest number = "+second_largest);
		
		//using predefined function
		var arrSort = elements.sort(function(a,b){return b-a});
		console.log("Predefined Function");
		console.log("Second largest number = "+arrSort[1]);
		
	</script>
</html>