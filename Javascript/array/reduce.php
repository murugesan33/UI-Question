<html>
   <head>
      <title>Reduce</title>
   </head>
   
   <body>
      <script type="text/javascript">
        var arr = [2, 3, 5, 12, 10, 5, 3];
		document.write("Write First:"+arr.reduce(function (a, b) { return a * b; })+"<br>");
		
		document.write("Write reduceRight:"+arr.reduceRight(function (a, b) { return a * b; })+"<br>");
		
		document.write("Write reduceRight:"+arr.reduce(function (a, b) { return a = b; })+"<br>");
		
		function multiply(arr){
			var sum = 1;
			for(var i=0;i<arr.length;i++){
				sum=sum * arr[i]; 
				console.log(sum);
			}	
			document.write("Total Normal Loop SUM :"+sum);
		}	
		multiply(arr);
      </script>
   </body>
</html>