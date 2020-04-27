<!DOCTYPE html>
<html>
	<head>
		<title>Normal Class Method</title>
	</head>
	<body>
		<script>
			/*var classA = function(){
				this.name = "Murugesan";
			}*/
			function simple(){
				this.name = "Murugesan is a Good Boy";
			}	
			simple.prototype.print = function(){
				console.log(this.name);	
			}	
			var a = new simple();
			a.print();
			
			function Person(first, last, age, eye) {
				this.firstName = first;
				this.lastName = last;
				this.age = age;
				this.eyeColor = eye;
			}
			Person.prototype.nationality = "English";

			var myFather = new Person("John", "Doe", 50, "blue");
			console.log("My father is " + myFather.nationality);
		</script>
	</body>
</html>