<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Apology Generator</title>
</head>
<body>
    <h1>Apology Generator</h1>
<form method="get" action="">
        <!-- input text -->
        <label for="nameChildren">Name of the children : </label>
	    <input type="text" name="nameChildren"></br>
        <label for="nameParent">Name of the Parent :</label>
	    <input type="text" name="nameParent" "></br>
        <label for="nameTeacher">Name of the teacher :</label>
	    <input type="text" name="nameTeacher" "></br>
       
        <!-- select genre -->
        <label for="genre">Genre :</label>
        <select name="genre">
            <option value="fille">Fille</option>
            <option value="garcon">Garçon</option>
        </select></br>

        <!-- input reason -->
        
        <label for=""><b>Reason for the absence</b></label></br>
        <label for="reason">Illness : </label>
        <input type="radio" name="reason" value='illness'></br>
        <label for="reason">Death of the pet (or a family member) : </label>
        <input type="radio" name="reason" value="death"></br>
        <label for="reason">Significant extra-curricular activity :</label>
        <input type="radio" name="reason" value="extra"></br>
        <label for="reason">Any other excuse of your choice :</label>
        <input type="radio" name="reason" value="another"></br>
        
        <!-- button submit -->
        
        <input type="submit" name="submit" value="Create Apology">

    </form>

    <?php

if(isset($_GET['submit'])){

    $nameChildren = $_GET['nameChildren'];
    $nameTeacher = $_GET['nameTeacher'];
    $nameParent = $_GET['nameParent'];
    $gender = $_GET['genre'];
    $reason = $_GET['reason'];
    $now = date("d-m-Y");

    $illnessExcuses = array(
        "Notre enfant, $nameChildren, est malade et ne pourra pas assister aux cours aujourd'hui. Nous regrettons les désagréments causés.",
        "Malheureusement, notre enfant, $nameChildren, est souffrant et ne pourra pas être présent en classe. Nous lui souhaitons un prompt rétablissement.",
        "En raison d'une maladie imprévue, notre enfant, $nameChildren, ne pourra pas se rendre à l'école aujourd'hui. Nous vous prions de bien vouloir l'excuser.",
        "Nous vous informons que notre enfant, $nameChildren, est malade et ne pourra pas participer aux cours du jour. Nous vous remercions de votre compréhension.",
        "Notre enfant, $nameChildren, est atteint d'une maladie et ne pourra pas assister aux cours. Nous vous prions de bien vouloir lui accorder une absence justifiée."
    );

    $deathExcuses= array(
        "Nous vous informons que notre enfant, $nameChildren, ne pourra pas assister aux cours en raison du décès d'un membre de notre famille. Nous vous prions de bien vouloir l'excuser.",
        "Malheureusement, notre enfant, $nameChildren, a vécu la perte d'un animal de compagnie bien-aimé. Cette triste nouvelle l'empêche de se concentrer sur ses études aujourd'hui.",
        "Suite au décès d'un proche, notre enfant, $nameChildren, sera absent des cours pour la journée. Nous vous remercions de votre compréhension et de votre soutien dans cette période difficile.",
        "Nous vous prions de bien vouloir excuser l'absence de notre enfant, $nameChildren, suite au décès d'un membre de notre famille. Cette épreuve nécessite sa présence auprès de ses proches.",
        "Notre enfant, $nameChildren, ne pourra pas être présent à l'école aujourd'hui en raison du décès d'un animal de compagnie qui lui était très cher. Nous lui accordons ce jour pour faire le deuil."

    );

    $activityExcuses = array(
        "Nous vous informons que notre enfant, $nameChildren, ne pourra pas assister aux cours en raison d'une activité extra-scolaire très importante qu'il/elle doit participer aujourd'hui.",
        "Malheureusement, notre enfant, $nameChildren, est engagé(e) dans une activité extra-scolaire de grande envergure qui lui demande une présence absolue ce jour. Nous vous prions de bien vouloir l'excuser.",
        "Suite à une activité extra-scolaire de grande importance, notre enfant, $nameChildren, sera absent des cours pour la journée. Nous sollicitons votre compréhension face à cette opportunité qu'il/elle ne peut pas manquer.",
        "Nous tenons à vous informer que notre enfant, $nameChildren, ne pourra pas être présent à l'école aujourd'hui en raison d'une activité extra-scolaire exceptionnelle qui nécessite son engagement total.",
        "Notre enfant, $nameChildren, sera absent de l'école pour la journée en raison d'une activité extra-scolaire significative qui lui offre une occasion unique de développement personnel."

    );

    $otherExcuses = array(
        "C'est avec regret que nous vous informons que notre enfant, $nameChildren, ne pourra pas assister aux cours aujourd'hui pour une raison personnelle qui ne peut pas être divulguée. Nous vous prions de bien vouloir l'excuser.",
        "Malheureusement, notre enfant, $nameChildren, ne pourra pas être présent à l'école aujourd'hui en raison de circonstances exceptionnelles. Nous vous remercions de votre compréhension.",
        "Nous tenons à vous informer que notre enfant, $nameChildren, ne pourra pas assister aux cours pour une raison indéterminée. Nous vous prions de bien vouloir l'excuser.",
        "Notre enfant, $nameChildren, sera absent de l'école pour la journée en raison d'une situation personnelle qui nécessite son absence. Nous vous remercions de votre compréhension.",
        "Nous vous informons que notre enfant, $nameChildren, ne pourra pas participer aux cours pour des raisons qui ne peuvent pas être divulguées. Nous vous prions de bien vouloir l'excuser."

    );

    $excuses = array(
        "illness" => $illnessExcuses,
        "death" => $deathExcuses,
        "extra" => $activityExcuses,
        "another" => $otherExcuses,
    );

    $randomExcuse = $excuses[$reason][array_rand($excuses[$reason])];

        switch($gender){
        case 'fille':
            echo "
            <div id='excuse'>
            <p id='date'>Mars, le $now </p>
            <p id='texte'> 
                    Monsieur / Madame $nameTeacher,
                    
                    $randomExcuse ,
                    
                    Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire de notre fille, vous pouvez me contacter sur mon téléphone portable ou par mail.
            </p>
            <p id='signature'>
                    Cordialement,
                    $nameParent
            </p>
           </div>";
            break;
        case 'garcon':
            echo "
            <div id='excuse'>
            <p id='date'>Mars, le $now </p>
            <p id='texte'> 
                    Monsieur / Madame $nameTeacher,
                    
                    $randomExcuse ,
                    
                    Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire de notre garçon, vous pouvez me contacter sur mon téléphone portable ou par mail.
            </p>
            <p id='signature'>
                    Cordialement,
                    $nameParent
            </p>
           </div>";
            break;
    }
}


    ?>

</body>
</html>