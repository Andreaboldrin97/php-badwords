<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <h1>PHP Project 1</h1>
    <p>
        <?php
        $paragraph = "Luigi Micco ha perso l'areo";
        echo $paragraph . '; Questa frase è lunga : ' . strlen($paragraph);
        ?>
    </p>

    <h4>Vedi cosa può esclamare Luigi aggiungi una parola .....</h4>
    <p>
        <?php
        $new_paragraph = $paragraph . ' : ' . $_GET['word'];
        echo $new_paragraph . ' ; Questa frase è lunga : ' . strlen($new_paragraph)
        ?>
    </p>

    <h4>No.. Luigi queste parole non si dicono , dovrò censurarle prima di metterle nel DOM...</h4>
    <p>
        <?php
        echo str_replace($_GET['word'], '****', $new_paragraph)
        ?>
    </p>
</body>

</html>