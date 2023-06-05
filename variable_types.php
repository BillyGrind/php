<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Type</title>
</head>
<body>
    <?php 
    $firstName = "Anthony";
    $age = 28 ;
    $eyeColor = "blue";
    $namesFamily = array(
        0 => 'Georges',
        1 => 'Jean', 
        2 => 'Mustapha', 
        3 => 'Pierre', 
        4 => 'Jean-Eustache', 
        5=>'Eric'
    );
    $hungry = true;
    ?>
    <p>Hi ! My name is <?php echo $firstName?></p>
    <p>I'm  <?php echo $age?> years old</p>
    <p>My eyes are <?php echo $eyeColor?> </p>
    <p>The first person in my family is  <?php echo $namesFamily[0]?></p>
    <p>My Dad is <?php echo $namesFamily[4]?></p>
    <p>And my mom is <?php echo $namesFamily[2]?></p>
    <p>Am I hungry ? <?php echo $hungry?></p>

</body>
</html>