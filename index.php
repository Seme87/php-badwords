<?php

    $text ='Alberto mentre rientra a casa dopo una giornata di scuola, incontra Paolo suo intimo amico di classe e di giochi. Alberto è sempre felice di incontrare Paolo. Alberto  chiede a Paolo di fermarsi a pranzo, cosi dopo possono studiare e giocare insieme anche nel pomeriggio.'; 
    $text_2 ='Alberto mentre rientra a casa dopo una giornata di scuola, incontra Paolo suo intimo amico di classe e di giochi. Alberto è sempre felice di incontrare Paolo. Alberto  chiede a Paolo di fermarsi a pranzo, cosi dopo possono studiare e giocare insieme anche nel pomeriggio.'; 
    
    $bad = $_GET["name"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Badwords</title>
</head>
<body>

    <p> Testo: <?php echo $text ?> </p>
    <p> Numero delle lettere del testo: <?php echo strlen($text) ?> </p>
    <br>
    <p> Testo: <?php echo $text_2 ?> </p>
</body>
</html>