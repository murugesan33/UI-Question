<!DOCTYPE html>
<html>
	<head>
		<title>simple Inherits</title>
	</head>
	<body>
		<div>Inheritance: It is the ability of a class to depends 
			 upon another class or number of classes and inherit their variable 
			 and methods for some specific uses. 
			 </div>
		<script>
			function apply(){
				this.firstName = "Murugesan";
			}	
			
			function runcat(){
				this.lastName = "Subbiah";
			}
			runcat.prototype = new apply();
			runcat.prototype.print = function(){
				document.write(this.firstName+" "+this.lastName);	
			}	
			var obj = new runcat();
			obj.print();
			//console.log(obj instanceof apply);	
		</script>
	</body>
</html>