<?php

// 1.1 Clean your room Exercise 
//change the code 
// $room_is_filthy = true;

// $possible_states = array(
//     0 => 'health hazard',
//     1 => 'filthy',
//     2 => 'dirty',
//     3 => 'clean',
//     4 => 'immaculate'
// );

// $room_filthiness = $possible_states[3];

// if($room_filthiness == 'health hazard' ){
// 	echo "Yuk, Room is health hazard : let's clean it up !";
// } else if($room_filthiness == 'filthy' ) {
// 	echo "Yuk, Room is filthy : let's clean it up !";
// }else if($room_filthiness == 'dirty' ) {
// 	echo "Yuk, Room is dirty : let's clean it up !";
// }else if($room_filthiness == 'clean' ) {
// 	echo "Yuk, Room is clean: let's clean it up !";
// }else if ($room_filthiness == 'immaculate' ) {
//     echo "Yuk, Room is immaculate: let's clean it up !";
// }else{
// 	echo "<br>Nothing to do, room is neat.";
// };

// $now = date("H");

// echo $now ;


// if($now> 5 AND $now<9){
//     echo "Good Morning !";
// } else if ($now>=9 AND $now<12){
//     echo "Good Day !";
// }else if ($now>=2 AND $now<16){
//     echo "Good afternoon !";
// }else if ($now>=16 AND $now<21){
//     echo "Good evening !";
// }else{
//     echo "Good night !";
// };



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
<form method="get" action="">

	<label for="age">Enter Your Age bitchez</label>
	<input type="text" name="age"></br>

    <label for="gender">Enter your gender</label>
	<input type="radio" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female">
    <label for="female">Female</label></br>

    <label for="mothertongue">Do you speak English ? </label>
	<input type="radio" name="mothertongue" value="yes">
    <label for="yes">Yes</label>
    <input type="radio" name="mothertongue" value="no">
    <label for="no">No</label></br>

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['submit'])) {
    // Form processing
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $mothertongue = $GET_['mothertongue'];

    if ($age < 12) {
        if($gender =='female'){
            if($mothertongue =='yes'){
                echo "Hello  MISS kiddo!";
            }else{
                echo "Aloha MISS kiddo!";
                }
        }else{
            if($mothertongue =='yes'){
                echo "Hello kiddo!";
            }else{
                echo "Aloha kiddo!";
                }
        }
    } else if ($age >= 12 && $age < 18) {
        if ($gender == 'female') {
            if($mothertongue =='yes'){
                echo "Hello  Miss Teenager!";
            }else{
                echo "Aloha Miss Teenager!";
                }
        } else {
            if($mothertongue =='yes'){
                echo "Hello Teenager!";
            }else{
                echo "Aloha Teenager!";
                }
        }
    } else if ($age >= 18 && $age < 115) {
        if ($gender == 'female') {
            if($mothertongue =='yes'){
                echo "Hello  Miss Adult!";
            }else{
                echo "Aloha Miss Adult !";
                }
        } else {
            if($mothertongue =='yes'){
                echo "Hello Adult!";
            }else{
                echo "Aloha Adult !";
                }
        }
    } else if ($age >= 115) {
        if ($gender == 'female') {
            if($mothertongue =='yes'){
                echo "Hello  Miss too old!";
            }else{
                echo "Aloha Miss too old !";
                }
        } else {
            if($mothertongue =='yes'){
                echo "Hello Wow! Still alive? Are you a robot, like me? Can I hug you?";
            }else{
                echo "ALOHA Wow! Still alive? Are you a robot, like me? Can I hug you?";
                }
        }
    }
}
?>

</body>
</html>