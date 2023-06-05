<?php

// $names = array("Maurice","Alice","Jésus","Judas");

// function say_hello($firstname){
// 	echo "<p>Hello $firstname!</p>";
// 	echo '<hr>';
// }

// foreach($names as $name){
//     say_hello($name);
// }

// // Function calls during "Runtime" :
// say_hello("Maurice");
// say_hello("Alice");
// say_hello("Jésus");
// say_hello("Judas");


// $str = 'This is going to be shuffled !';
// $str = str_shuffle($str);
 
// echo $str;

$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

$text = explode(" ",$text);

foreach($text as $word){

    // echo str_shuffle($word)." ";
    $firstLetter = substr($word, 0, 1);
    $lastLetter = substr($word, -1);
    $middlePart = str_shuffle(substr($word, 1, -1));
    echo $firstLetter . $middlePart . $lastLetter . " ";
}


?>