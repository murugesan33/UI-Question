<html>
   <head>
      <title>Sort</title>
   </head>
   
   <body>
      <script type="text/javascript">
        var arr = ["Apple", "Apple1", "Orange", "Bannana", "Comes"];
		document.write("Sort Alpahbet :"+arr.sort()+"<br/>");
		document.write("Sort Numerice Asc:"+[10, -2, 11, 4].sort(function(a, b){ return  a-b;})+"<br/>");
		document.write("Sort Numerice DSC :"+[10, -2, 11, 4].sort(function(a, b){ return  b-a;})+"<br/>");		
      </script>
      
   </body>
</html>