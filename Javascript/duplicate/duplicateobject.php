<!DOCTYPE html>
<html>
	<head>
		<title>Duplicate Object</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		var jsonObj = {"name" : "someName1", 'name': 'someName2', 'name': 'someName4', 'name': 'someName2' };
		var keys = jsonObj.keys(answers);
		console.log(keys);
		var dupe = false;

		for(var i=0;i<keys.length;i++){
		 for(var j=i+1;j<keys.length;j++){
		   if(answers[keys[i]] === answers[keys[j]]){
			 dupe = true;
			 break;
		   }
		 }
		 if(dupe){ console.log("dupe value is there.."); break; }
		}	
	</script>
</html>


