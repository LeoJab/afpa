<?php

class Personnage {
    public $nom;
    public $prenom;
    public $age;
    public $sexe;

    public function SetNewPerso($new_nom, $new_prenom, int $new_age, $new_sexe){
        $this->nom = $new_nom;
        $this->prenom = $new_prenom;
        $this->age = $new_age;
        $this->sexe = $new_sexe;
    }

    public function Afficher(){
        echo $this->nom . " " . $this->prenom . " " . $this->age . " " . $this->sexe;
    }
}