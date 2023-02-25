<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2 php objet</title>
</head>
<body>
    <?php
    include 'personnage.php';
    $perso1 = new personnage("julien");
    $perso1->affichePseudoEtVie();
    ?>
</body>
</html>