<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <?php
    // creo le variabili in uno slot 
    $paragraph = "Luigi Micco ha perso l'areo";
    $new_Word = $_GET['word'];
    $new_paragraph = $paragraph . ' : ' . $new_Word;
    $censored_Paragraph = str_replace($_GET['word'], '****', $new_paragraph);
    ?>


    <h1>PHP Project 1</h1>
    <p>
        <?php

        echo $paragraph . '; Questa frase è lunga : ' . strlen($paragraph);
        ?>
    </p>

    <h4>Vedi cosa può esclamare Luigi aggiungi una parola .....</h4>
    <p>
        <?php
        echo $new_paragraph . ' ; Questa frase è lunga : ' . strlen($new_paragraph)
        ?>
    </p>

    <h4>No.. Luigi queste parole non si dicono , dovrò censurarle prima di metterle nel DOM...</h4>
    <p>
        <?php
        echo $censored_Paragraph;
        ?>
    </p>
</body>

</html>