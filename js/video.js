var video1 = document.querySelector("#videoElement1");
var video2 = document.querySelector("#videoElement2");
var video3 = document.querySelector("#videoElement3");
var video4 = document.querySelector("#videoElement4");

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

if (navigator.getUserMedia) {
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}

function handleVideo(stream) {
    video1.src = window.URL.createObjectURL(stream);
    video2.src = window.URL.createObjectURL(stream);
    video3.src = window.URL.createObjectURL(stream);
    video4.src = window.URL.createObjectURL(stream);
}

function videoError(e) {
    // do something
}

var screen1 = document.getElementById(videoElement1);

screen1.addEventListener("click", enlarge);

function enlarge(){
    window.location ="../enlarge/enlarge.php";
}
