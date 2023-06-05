<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
echo $countries[2];

$familyMembers = array('John', 'Jhonny','Johnette','Johnisse','Jhonnissette');

print_r($familyMembers);

$favoriteRecipe = array('pasta','cheese','sauce','spices');

print_r($favoriteRecipe);

$favoriteFilms = array('Evil Dead', 'The lord of the rings','Hobo with a shotgun','Interstellar','Conan The barbarian');

print_r($favoriteFilms[3]);


//display array with infos
echo '<pre>';
print_r($countries);
echo '</pre>';

var_dump($countries);

array_push($countries, 'England');

var_dump($countries);

//create new array with new data
$person['function'] = 'Junior Web Developer';

var_dump($person);

//change data of array
$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'];

$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person[2] = 'Brussels';

// compare this
echo $person[1];
// with this
echo $person['street'];

?>