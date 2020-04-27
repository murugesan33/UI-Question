<!DOCTYPE html>
<html>
	<head>
		<title>Inherits Method</title>
	</head>
	<body>
		<script>
			var apply = function(){
				lastname:"PARVATHI";
			}	
			function simple(){ // normal function
				this.name = "Murugesan";
			}	
			simple.prototype.print = function(){ // adding method to simple function
				console.log(this.name);	
			}
			simple.prototype.surname = "SankerLingam"; // adding property to simple function
			Person.prototype = Object.create(simple.prototype); // creating object for simple.prototype
			g = new simple(); // creating constructor for simple function
			console.log(g.surname);
			g.print();
			app = new apply();
			app.lastname = 'SUBBIAH';
			function Person() { // normal function
				this.surname = "Subbiah";
			}
			Person.prototype.print = function() { // adding method to person function
				//simple.prototype.print.call(this);
				console.log(g.name+" "+this.surname+" "+g.surname+" "+app.lastname);
			}
			var a = new Person(); // creating constructor for person function
			a.print();
			
		</script>
	</body>
</html>