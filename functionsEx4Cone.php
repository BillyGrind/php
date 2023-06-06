<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/ \</title>
</head>
<body>
    


<?php

function calculateConeVolume($ray,$height){

    $volume = $ray*$ray * 3.14 * $height * (1/3);

    echo "The volume of a cone which ray is $ray and height is $height = $volume";

}

calculateConeVolume(4,19);


?>



</body>
</html>