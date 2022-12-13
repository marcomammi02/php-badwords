<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $title = 'Bella stronza';
        $text = 'Mi verrebbe di strapparti
            quei vestiti da puttana,
            e tenerti a gambe aperte
            finché viene domattina...
            Ma di questo nostro amore
            così tenero e pulito,
            non mi resterebbe altro che
            un lunghissimo minuto di violenza...
            E allora ti saluto, bella stronza';
        $length = strlen($text);
    ?>

    <h1><?= $title; ?></h1>
    <p><?= $text; ?></p>
    <p>Lunghezza testo: <?= $length; ?></p>
    <form method="GET" action="">
        <label for="badword">Inserisci la parola da censurare:</label>
        <input type="text" id="badword" name="">
    </form>
    
</body>
</html>