<!DOCTYPE html>
<html>
	<head>
		<title>Closure & Prototype Performance Difference</title>
	</head>
	<body>
	<body>
	<script type="text/javascript">
		// Closure implementation

		function Pixel(x, y)

		{

		  this.x = x;

		  this.y = y;

		  this.getX = function()

		  {

			return this.x;

		  }

		  this.getY = function()

		  {

			return this.y;

		  }

		  this.setX = function(value)

		  {

			this.x = value;

		  }

		  this.setY = function(value)

		  {

			this.y = value;

		  }

		}

 

		// Prototype implementation

		function PixelP(x, y)

		{

		  this.x = x;

		  this.y = y;

		}

		PixelP.prototype.getX = function()

		{

		  return this.x;

		}

		PixelP.prototype.getY = function()

		{

		  return this.y;

		}

		PixelP.prototype.setX = function(value)

		{

		  this.x = value;

		}

		PixelP.prototype.setY = function(value)

		{

		  this.y = value;

		}

 

 

	function TestPerformance()

	{

	  var closureStartDateTime = new Date();

	  for (var i = 0; i < 20000; i++)

	  {

		var x = new Pixel(i, i);   

	  }

	  var closureEndDateTime = new Date();

	 

	  var prototypeStartDateTime = new Date();

	  for (var i = 0; i < 20000; i++)

	  {

		var x = new PixelP(i, i);   

	  }

	  var prototypeEndDateTime = new Date();

	  var closureTime = closureEndDateTime.getTime() - closureStartDateTime.getTime();

	  var prototypeTime = prototypeEndDateTime.getTime() - prototypeStartDateTime.getTime();

	  alert("Closure time: " + closureTime + ", prototype time: " + prototypeTime);

	}

	TestPerformance();	
	</script>
</html>