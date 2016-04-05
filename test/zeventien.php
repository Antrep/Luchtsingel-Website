<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/timepicki.css">
    <link href="css/testTijd.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <title></title>
</head>
<body>

<div class="tabel">
    <p>Zoek hier uw video</p>
    <input type="time" id="search">
    <table id="table" style="margin: auto">
        <tr>
            <td>17:32</td>
            <td><a href="#">Link to video</a> </td>
        </tr>
        <tr>
            <td>17:57</td>
            <td><a href="#">Link to video</a></td>
        </tr>
        <tr>
            <td>17:01</td>
            <td><a href="#">Link to video</a></td>
        </tr>
    </table>
    <br>
</div>

<div class="terug">
    <form action="searchTest.php">
        <input type="submit" value="Terug">
    </form>
</div>

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
