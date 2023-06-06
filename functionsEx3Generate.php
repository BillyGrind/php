<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate New Word</title>
</head>
<body>

<?php
function generateRandomWord($minLength, $maxLength) {
    $length = rand($minLength, $maxLength);
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $word = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $word .= $characters[$randomIndex];
    }

    return $word;
}

$word1 = '';
$word2 = '';

if (isset($_POST['generate'])) {
    $word1 = generateRandomWord(1, 5);
    $word2 = generateRandomWord(7, 15);
}

?>
    <h1>Generate a new word</h1>
    <h2>Random Word 1: </h2>
    <p>"<?php echo $word1; ?>"</p>
    <h2>Random Word 2: </h2>
    <p>"<?php echo $word2; ?>"</p>
    <form method="POST">
        <input type="submit" name="generate" value="Generate">
    </form>

<?php

// de capitilize string

$str ="STOP YELLING I CAN'T HEAR MYSELF THINKING!!";

$str = mb_strtolower($str); 

echo $str;

?>


</body>
</html>