<?php

echo "Hello World";

$web_development = array(
);

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on rails';
$web_development['frontend'][] = 'Css';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'Javascript';
$web_development['frontend'][] = 'flash';
$web_development['frontend'][0] = 'html';
unset($web_development['frontend'][4]);
echo '<pre>';
print_r($web_development);
echo '</pre>';



?>