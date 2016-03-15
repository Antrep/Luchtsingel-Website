<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/timepicki.css">
    <link href="css/infoStyle.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>

<div id="container">
    <div id="header">

    </div>

    <div id="content">
        <div id="nav">
        </div>
        <div id="main">
            <form>
                <input type="text" name="timepicker" class="time_element" style="width 300px; height: 40px; font-size: large"/>
            </form>


        </div>
        <div id="nav">
            <a href=homepage.php>Go back</a>
        </div>
    </div>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/loadPage.js"></script>
<script src="js/timepicki.js"></script>
<script>
    $(document).ready(function(){
        $(".time_element").timepicki();
    });
</script>
</html>
