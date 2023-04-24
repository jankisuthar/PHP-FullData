<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<p id="demo"></p>

<button type="button" onclick="loadDoc()">Change Content</button>

<script>
function loadDoc() 
{
  var xhttp;
  if (window.XMLHttpRequest) // create object for request
  {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
//The readyState property holds the status of the XMLHttpRequest.

//The onreadystatechange property defines a function to be executed when the readyState changes.

//The status property and the statusText property holds the status of the XMLHttpRequest object.
  
//readyState==4: request finished and response is ready  
//status	200: "OK"
  
   xhttp.onreadystatechange = function() 
   {  
	   if(xhttp.readyState==4 || xhttp.status==200)
	   {
		   //The responseText property returns the server response as a JavaScript string, and you can use it accordingly:
		   document.getElementById("demo").innerHTML=this.responseText;
	   }
   }
//To send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:
  xhttp.open("GET", "data.php", true);
  xhttp.send();
 
}
</script>

</body>
</html>
