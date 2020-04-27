<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery.unique demo</title>
  <style>
  div {
    color: blue;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>There are 6 divs in this document.</div>
<div></div>
<div class="dup"></div>
<div class="dup"></div>
<div class="dup"></div>
<div></div>
 
<script>
// unique() must take a native array
var divs = $( "div" ).get();
 
// Add 3 elements of class dup too (they are divs)
divs = divs.concat( $( ".dup" ).get() );
$( "div:eq(1)" ).text( "Pre-unique there are " + divs.length + " elements." );
 
divs = jQuery.unique( divs );
$( "div:eq(2)" ).text( "Post-unique there are " + divs.length + " elements." )
  .css( "color", "red" );
  
var answers = {'name':'Murugesan', 'name':'Sanker', 'name':'Kumar', 'name':'Manikandan', 'name':'Shanmugam'}; 

console.log(jQuery.unique(answers));
 
</script>
 
</body>
</html>