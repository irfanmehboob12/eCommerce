@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



</head>
<body>


</body>
  <script>

var mousePosition;
var offset = [0,0];
var div;
var isDown = false;

div = document.createElement("div");
div.style.position = "absolute";
div.style.left = "500px";
div.style.top = "300px";
div.style.width = "100px";
div.style.height = "100px";
div.style.background = "red";
div.style.color = "blue";

document.body.appendChild(div);

div.addEventListener('mousedown', function(e) {
    isDown = true;
    offset = [
        div.offsetLeft - e.clientX,
       // div.offsetTop - e.clientY
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown) {
        mousePosition = {
    
            x : event.clientX,
            //y : event.clientY
    
        };
        div.style.left = (mousePosition.x + offset[0]) + 'px';
        //div.style.top  = (mousePosition.y + offset[1]) + 'px';
    }
}, true);
</script>
</html>
