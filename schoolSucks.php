<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        // echo $annotation;
        if($annotation<4){
            echo "This work is really bad. What a dumb kid!"; 
        }else if($annotation>=5 AND $annotation<=9){
            echo"This is not sufficient. More studying is required.";
        }else if($annotation ==10){
            echo"barely enough!";
        }else if($annotation == 11 OR $annotation == 12 OR $annotation == 13 OR $annotation == 14){
            echo "Not Bad !";
        }else if($annotation == 15 OR $annotation == 16 OR $annotation == 17 OR $annotation == 18){
            echo"Bravo, bravissimo!";
        }else if($annotation == 19 OR $annotation == 20){
            echo "Too good to be true : confront the cheater!";
        }
    }

    ?>

</body>
</html>