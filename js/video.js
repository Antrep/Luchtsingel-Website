var video = document.querySelector("#videoElement1");

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

if (navigator.getUserMedia) {
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}

function handleVideo(stream) {
    video.src = window.URL.createObjectURL(stream);
}

function videoError(e) {
    // do something
}

var screen1 = document.getElementById(videoElement1);

screen1.addEventListener("click", enlarge);

function enlarge(){
    window.location.href = 'localhost/luchtsingel-website/enlarge.php';
}
