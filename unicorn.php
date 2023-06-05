<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>
   
<form method="get" action="">
    <label for="">Are you</label></br>
    <label for="unicorn">an Humain</label>
    <input type="radio" name="type" value="humain"></br>
    <label for="unicorn">a cat</label>
    <input type="radio" name="type" value="cat"></br>
    <label for="unicorn">or an Unicorn</label>
    <input type="radio" name="type" value="unicorn"></br>

    <input type="submit" name="submit" value="Glubs">
</form>


<?php

if(isset($_GET['submit'])){

    $type = $_GET['type'];

    $humain ="";
    $cat ="";
    $unicorn ="";

    $is_humain= ($type =='humain') ? $humain ='<iframe src="https://giphy.com/embed/aILCLOWVzT0Sk" width="320" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animation-art-3d-aILCLOWVzT0Sk">via GIPHY</a></p>':false;
    
    $is_cat= ($type =='cat') ?  $cat='<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/IsDjNQPc4weWPEwhWm/video" width="480"></iframe></div>':false;

     $is_unicorn= ($type =='unicorn') ? $unicorn='<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/Ze44chcCSUpyVN1gmQ/video" width="480"></iframe></div>':false;

        echo $humain;
        echo $cat;
        echo $unicorn;

    // switch($type){
    //     case 'humain':
    //         echo'<iframe src="https://giphy.com/embed/aILCLOWVzT0Sk" width="320" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animation-art-3d-aILCLOWVzT0Sk">via GIPHY</a></p>';
    //         break;
    //     case 'cat':
    //         echo'<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/IsDjNQPc4weWPEwhWm/video" width="480"></iframe></div>';
    //         break;
    //     case 'unicorn':
    //         echo'<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/Ze44chcCSUpyVN1gmQ/video" width="480"></iframe></div>';
    //         break;
    //     default:
    //         echo "ERROOOOOOR";
    // }
}
?>



</body>
</html>

















