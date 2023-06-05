<?php

// $number = 1 ;

// while($number <= 120){
//     echo "$number <br />" ;
//     $number ++;
// };

// for ($number = 1; $number <=120; $number ++){
//     echo "$number <br />" ;
// }

// $namesTeam = array("Abel", "Alexandra","Anthony","Benjamin","Bruno","Delphine","Emilien","Ethan","Ismaël","Jodie","Julien","Louka","Loïc","Luciano","Marine","Nikko","Noa","Steve","Sylvain","Willy");

// foreach($namesTeam as $nameTeam){
//     echo "$nameTeam <br />";
// }


$countries = array(
    'BE'=>'Belgium',
    'NER'=>'Niger',
    'TGO'=>'Togo',
    'ZAF'=>'South Africa',
    'ARG'=>'Argentina',
    'AUS'=>'Australia',
    'AUT'=>'Austria',
    'GER'=>'Germany',
    'PL'=>'Poland',
    'RU'=>'Russia'
);

echo "<select>";

foreach($countries as $key => $country){
    echo "<option value='$key'>$country</option>";
}

echo "</select>";


?>