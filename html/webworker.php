<!DOCTYPE html>
<html>
<body>

<p>Count numbers: <output id="result"></output></p>
<button onclick="startWorker()">Start Worker</button>
<button onclick="stopWorker()">Stop Worker</button>
<script>
var w;

function startWorker() {
    if(typeof(Worker) !== "undefined") {
        if(typeof(w) == "undefined") {
            w = new Worker("demo_workers.js");
			console.log("demo_workers"+w);
        }
        w.onmessage = function(event) {
			console.log("event :"+event.data);	
            document.getElementById("result").innerHTML = event.data;
        };
		console.log("w.onmessage :"+w.onmessage);
		console.log("webworker");
    } else {
        document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
    }
}

function stopWorker() {
    w.terminate();
    w = undefined;
}
</script>

</body>
</html> 