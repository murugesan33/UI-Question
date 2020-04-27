<!DOCTYPE html>
<html>
	<head>
		<title>Duplicate Array</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var values = [
			{ name: 'someName1' },
			{ name: 'someName2' },
			{ name: 'someName4' },
			{ name: 'someName2' },
			{ name: 'someName1' },
			{ name: 'someName3' },
			{ name: 'someName4' }
		];

		var valueArr = values.map(function(item){ return item.name });
		console.log(valueArr);
		var result = [];
		var isDuplicate = valueArr.some(function(item, idx){ 
			alert(valueArr.indexOf(item)+"==="+idx+"=="+item);
			if(valueArr.indexOf(item) != idx){
				if(result.indexOf(item) == -1){
					result.push(item); 
				}
			}	
			//return valueArr.indexOf(item) != idx 
		});		
		console.log(result);
		//console.log(isDuplicate);	
	</script>
</html>


