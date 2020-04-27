<!DOCTYPE html>
<html>
	<head>
		<title>simple Polymorphism</title>
	</head>
	<body>
		<div>Polymorphism: Its is oop concepts for writing one function or methods which works in a variety of different ways. 
			 </div>
		<script>
			function person(age, name){
				this.age = age;
				this.name = name;
			}	
			function employee(weight, lastname, salary){
				this.weight = weight;
				this.lastname = lastname;
				this.salary = salary;
			}	
			person.prototype.getInfo = function(){
				console.log	(this.name+" "+this.age);
			}	
			employee.prototype = new person();
			employee.prototype.getInfo = function(){
				console.log	(this.weight+" "+this.lastname+" "+this.salary);	
			}	
			var per = new person(31, 'Murugesan');
			var emp = new employee(31, 'Subbiah', '10000');
			per.getInfo();
			emp.getInfo();
		</script>
	</body>
</html>