<?php
class Personnage {
    private $pseudo;
    private $vie;

    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
        $this->vie = 100;
    }

    public function affichePseudoEtVie() {
        return "Le personnage " . $this->pseudo . " a " . $this->vie . " points de vie.<br>";
    }

    public function attaquer($autrePersonnage) {
        echo $this->pseudo . " attaque " . $autrePersonnage->pseudo . "<br>";
        $autrePersonnage->defense(50);
    }

    public function defense($attaque) {
        echo $this->pseudo . " se défend face à une attaque de " . $attaque . " points de dégâts.<br>";
        $this->vie -= $attaque;
        echo "Il lui reste " . $this->vie . " points de vie.<br>";
    }
}
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
    <?php
    $perso1 = new Personnage("Julien");
    $perso2 = new Personnage("Lucie");
    $perso1->attaquer($perso2);
    $perso1->affichePseudoEtVie();
    $perso2->affichePseudoEtVie();
    ?>
</body>

</html>
