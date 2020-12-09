<?php function sum($startNumber = 0, $middleNumber = 2, $endNumber = 3)
{
    return $startNumber + $middleNumber + $endNumber;
} ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 8 Partie 4</title>
</head>

<body>
    <h1>Exercice 8 Partie 4</h1>
</body>
    <p><?= sum(1) ?></p>
    <p><?= sum(1, 1)?></p>
    <p><?= sum(1, 1, 1) ?></p>
</html>