<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/timepicki.css">
    <link href="css/test.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>


<input type="time" id="search" placeholder="Hoelaat was u bij de luchtbrug">

<!--    <form>-->
<!--        <input type="text" id="search" name="timepicker" class="time_element" style="width 300px; height: 40px; font-size: large"/>-->
<!--    </form>-->

<table id="table">
    <tr>
        <td>19:45</td>
        <td><a href="#">Link to video</a> </td>
    </tr>
    <tr>
        <td>19:32</td>
        <td><a href="#">Link to video</a></td>
    </tr>
    <tr>
        <td>19:58</td>
        <td><a href="#">Link to video</a></td>
    </tr>
</table>

<a href="searchTest.php">Terug</a>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/search.js"></script>
<script src="../js/timepicki.js"></script>
<script>
    $(document).ready(function(){
        $(".time_element").timepicki();
    });
</script>
</html>
