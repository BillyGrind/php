<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions Ex 2</title>
</head>
<body>

<?php

$str = " info";

function feedback(&$info,$message,$class){
    $class.=$info;
    echo "<div class='$class'>$message</div>";
}

feedback($str,"Error :Incorrect email address","error");
feedback($str,"Notice :Incorrect email address","notice");
feedback($str,"Warning :Incorrect email address","warning");

?>


</body>
</html>


