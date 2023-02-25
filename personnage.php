<?php
    class personnage{
        private $pseudo;
        private $vie;
        public function __construct($pseudo){
            $this->pseudo = $pseudo;
            $this->vie = 100;
        }
        public function affichePseudoEtVie(){
            echo "Le personnage " . $this->pseudo . " a " . $this->vie . " points de vie.<br>";
        }
    }
?>