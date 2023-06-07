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
$strError = "error";
$strNotice ="notice";
$strWarning ="warning";

function feedback(&$info,$message,$class){
    $class.=$info;
    $message = ucfirst($message);
    echo "<div class='$class'>$message</div>";
}


feedback($str,"$strError:Incorrect email address",$strError);
feedback($str,"$strNotice:Incorrect email address",$strNotice);
feedback($str,"$strWarning:Incorrect email address",$strWarning);

?>


</body>
</html>


