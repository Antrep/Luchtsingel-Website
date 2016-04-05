<?PHP

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link href="webcamtest.css" rel="stylesheet" type="text/css">
  <title></title>
</head>
<body>
<div id="container">

    <div class="booth">
        <video autoplay="true" class="videoElement" id="videoElement1" width="400" height="300"></video>
<!--        <video id="video" width="400" height="300"></video>-->
    <a href="a" id="capture" class="booth-capture-button">Take Photo</a>
        <canvas id="canvas" width="400" height="300"></canvas>

    </div>

</div>

</body>
<script src="testcam.js" type="text/javascript"></script>
<script src="../js/video.js"></script>
</html>
