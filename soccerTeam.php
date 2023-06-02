<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <h2>Soccer Team</h2>
<form method="get" action="">

    <label for="name">Enter your Name</label>
	<input type="text" name="name"></br>

	<label for="age">Enter Your Age bitchez</label>
	<input type="text" name="age"></br>

    <label for="gender">Enter your gender</label>
	<input type="radio" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female">
    <label for="female">Female</label></br>

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

if (isset($_GET['submit'])) {
    // Form processing
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $name = $_GET['name'];

    if($age>= 21 AND $age<=41 AND $gender == 'female'){
        echo "Welcome to the soccer team ".$name;
    }else{
        echo "Go fuck yourself ".$name;
    }
}

?>

</body>
</html>