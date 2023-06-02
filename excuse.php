<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        // echo $nameChildren , $nameTeacher, $reason;

       switch($gender){
        case 'fille':
                echo "
                Mars, le $now 
        
                Monsieur / Madame $nameTeacher,
        
                Notre enfant, $nameChildren , sera absente et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
                Notre fille  sera absente et n’ira pas au lycée pour $reason.
                
                Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.
                
                Cordialement
                $nameParent";
                break;
        case 'garcon':
                echo "
                Mars, le $now 
        
                Monsieur / Madame $nameTeacher,
        
                Notre enfant, $nameChildren , sera absent et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
                Notre garçon  sera absent et n’ira pas au lycée pour $reason.
                
                Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.
                
                Cordialement
                $nameParent";
                break;
    
       }
       
       
       
        // echo "
        // $gender
        // Mars, le $now 

        // Monsieur / Madame $nameTeacher,

        // Notre enfant, $nameChildren , sera absent (absente) et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
        // Notre fille (fils) sera absente et n’ira pas au lycée pour $reason.
        
        // Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.
        
        // Cordialement
        // $nameParent";

    }


    ?>
</body>
</html>