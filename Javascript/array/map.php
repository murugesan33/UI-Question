<html>
   <head>
      <title>JavaScript Array map Method</title>
   </head>
   
   <body>
   
      <script type="text/javascript">
         // if (!Array.prototype.map)
         // {
            // Array.prototype.map = function(fun /*, thisp*/)
            // {
               // var len = this.length;
               
               // if (typeof fun != "function")
               // throw new TypeError();
               
               // var res = new Array(len);
               // var thisp = arguments[1];
               
               // for (var i = 0; i < len; i++)
               // {
                  // if (i in this)
                  // res[i] = fun.call(thisp, this[i], i, this);
               // }
               // return res;
            // };
         // }
         
         var numbers = [1, 4, 9];
         var roots = numbers.map(Math.sqrt);
         document.write("roots is : " + roots ); 
		 var roots = numbers.map(function(a,b){return a-b});
         document.write("roots is : " + roots );
      </script>
      
   </body>
</html>