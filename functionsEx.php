<?php
//capitalize first letters
$word = "bonjour";
function capitalizeLetters($wordToCapitalize){

    echo ucfirst($wordToCapitalize)."<br />";
}
capitalizeLetters($word);

//display the date and hour
$now = date('d-m-Y');
echo "La date du jour est $now <br />";

$nowBetter = date('d-m-Y h:i:s');
echo "La date et l'heure du jour est $nowBetter <br />";

//function sum
$number1 = 2;
// $number2 = "caramel";
$number2 = 10 ;

function sum($n1,$n2){

    if(is_numeric($n1) AND is_numeric($n2)){
        $sum = $n1 + $n2 ;
        echo "La somme est égal à $sum <br />";
    }else{
        echo "Error: argument is the not a number.<br />";
    }
}

sum($number1,$number2);

// create acronym
$toAcronymize = "America great again";
$wordsToAcronymize = explode(" ", $toAcronymize);

function createAcronyme($wordsToAcronymize) {
    $acronym = "";
    foreach ($wordsToAcronymize as $word) {
        $acronym .= substr($word, 0, 1);
    }
    return $acronym;
}

$acronym = createAcronyme($wordsToAcronymize);
echo $acronym;


?>