<?php
//initialisation de la classe
    class Personnage {
        //paramètres
        private $id;
        private $nom;
        private $force;
        private $vie;
        private $pdo;
        //méthode 1 qui crée l'objet PDO, qui se connecte à la base et fais la requete
        public function __construct($id) {

            $bdd = 'mysql:host=localhost;dbname=exo5;charset=utf8mb4';
            $username = 'root';
            $this->pdo = new PDO($bdd, $username);
    
            $requete = $this->pdo->prepare('SELECT `id`, `nom`, `force`, `vie` FROM personnage WHERE id = :id');
            $requete->execute(['id' => $id]);
            $data = $requete->fetch();
            //on dit que si data est true alors on recup les caractéristiques du perso dans la bdd sinon on dit qu'on a pas trouvé le perso
            if ($data) {
                $this->id = $data['id'];
                $this->nom = $data['nom'];
                $this->force = $data['force'];
                $this->vie = $data['vie'];
            } else {
                throw new Exception('Personnage non trouvé');
            }
        }
        //méthode 2 qui affiche les caractéristiques du perso
        public function afficherPersonnage() {
            echo "Id : " . $this->id . "<br>";
            echo "Nom : " . $this->nom . "<br>";
            echo "Force : " . $this->force . "<br>";
            echo "Vie : " . $this->vie . "<br>";
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
    //on crée un nouveau perso
        $perso1 = new Personnage(1);
        $perso1->afficherPersonnage();
    ?>
</body>
</html>