<?php 

    $text = "La macchina del capo ha un buco nella gomma, la macchina del capo ha un buco nella gomma, la macchina del capo ha un buco nella gomma e noi l'aggiusteremo con il chewing gum"; 
    $badword = $_GET["badword"]; //Digitare ?badword = censored (parola da censurare) nell'url di ricerca
    $censored = "***"; 
    $textCensored = str_replace($badword, $censored, $text)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $text ?></p>
    <p>La frase è lunga: <?php echo strlen($text) ?> caratteri</p>
    <h2>Versione censurata:</h2>
    <p><?php echo $textCensored ?></p>
    <p>La frase è lunga: <?php echo strlen($textCensored) ?> caratteri</p>
</body>
</html>