<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
</head>
<body>

    <?php 
    $temperature = 23 ;
    if( $temperature >= 15 ) {
        // code to execute if the condition results TRUE
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;
      } else {
        // code to execute if the condition results FALSE
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
      }
      
      if ($should_i_wear_a_scarf == true){
          // this is a "fake" function for the sake of the example 
          // that function is only executed in the condition is true
          grab_scarf_from_door_hanger();
      }
      // The following function will be executed everytime, 
      // but its $clothes argument changes according to the result
      // of our previous conditional structure
     cover_my_chest_with($clothes);
    ?>
    <p> I do swear a <?php ?></p>
</body>
</html>



