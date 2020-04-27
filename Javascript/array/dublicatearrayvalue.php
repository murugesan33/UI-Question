<!DOCTYPE html>
<html>
	<head>
		<title>Find 2nd Highest Number in Array</title>
	</head>
	<script>
		var arr = [1, 2, 5, 6, 4, 3, 7, 1, 5, 5, 5];
		var dublicate = {};
		for(var k=0;k<arr.length;k++){
			//console.log(arr[k]);
			var cnt = 0;
			for (var i=k+1;i<arr.length;i++){
				if(arr[k] == arr[i]){
					cnt = cnt+1; 
				}	
			}	
			//console.log(cnt);
			if(cnt > 0){
				if(k == 0){
					dublicate[arr[k]] = cnt+1;
				}else{
					y = dublicate.hasOwnProperty(arr[k]);
					if(!y){
						dublicate[arr[k]] = cnt+1;
					}	
				}
			}	
		}	
		console.log(dublicate);
		
	</script>
</html>