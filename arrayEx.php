<?php

$me = array(
    'firstname' => 'Anthony',
    'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix')
);

$soulmate = array(
    'firstname' => 'Celine',
    'lastname' => 'AmeSoeur',
    'hobbies' => array('beers','history','reading','airsoft'),
);

$me['lastname'] = "Denayer";
$me['likeFootball?'] = false;
$me['hobbies'] = array("airsoft","coding","eat dolphins","playing DOOM");
$me['age'] = 28;
$me['favoriteSeason'] = "Autumn";

// echo '<pre>';
// print_r($me);
// echo '</pre>';

// var_dump($me);

$mother = array(
    'firstname' => "mother",
    'lastname' => "mom",
    'hobbies' => array("read","cook","mother"),
    'age' => 153,    
);

$me['mother'] = $mother;
$me['hobbies'][]='taxidermies';
$me['lastname'] ='Durand';

// var_dump($me);
echo '<pre>';
print_r($me);
echo '</pre>';

// count number of hobbies in mother
$numberHobbiesMother = count($me['mother']['hobbies']);
echo "Total hobbies mother $numberHobbiesMother </br>";

$numberHobbiesMe = count($me['hobbies']);
echo "Total hobbies of me  $numberHobbiesMe </br>";

$totalHobbies = $numberHobbiesMe + $numberHobbiesMother;

echo "Total of hobbies is $totalHobbies</br>";


//soulmate 
//sorting array with same hobbies
$possible_hobbies_via_intersection = array_intersect($me['hobbies'],$soulmate['hobbies']);
//sorting  a merged array with all hobbies 
$possible_hobbies_via_merge = array_merge($me['hobbies'],$soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>