<?php

class Magasin {
    public $nom;
    public $adresse;
    public $cp;
    public $ville;
    public $restaurant;

    public function SetNewMagasin($new_nom, $new_adresse, INT $new_cp, $new_ville, $restaurant) {
        $this->nom = $new_nom;
        $this->adresse = $new_adresse;
        $this->cp = $new_cp;
        $this->ville = $new_ville;
        $this->restaurant = $restaurant;
    }

    public function AfficherMagasin(){
        echo "<br>" . $this->nom . " " . $this->adresse . " " . $this->cp . " " . $this->ville . " " . $this->restaurant;
    }
}