<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
<form method="get" action="">
        <label for="annotation">Enter the number annotation</label>
	    <input type="number" name="annotation" value="annotation"></br>
        <input type="submit" name="submit" value="Destroy it">
</form>


<?php

if(isset($_GET['submit'])){
    
    $annotation = $_GET['annotation'];

    switch ($annotation){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "This work is really bad. What a dumb kid!"; 
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo"This is not sufficient. More studying is required."; 
            break;
        case 10:
            echo"barely enough!"; 
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "Not Bad !";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            echo"Bravo, bravissimo!";
            break;
        case 19:
        case 20:
            echo "Too good to be true : confront the cheater!";
            break;
        default:
        echo "nothing here, sorry";
    }
}

?>

</body>
</html>




