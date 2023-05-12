<?php

class Employe {
    public $nom;
    public $prenom;
    private $d_e;
    private $fonction;
    private $salaire;
    private $service;

    public function SetNewEmploye($new_nom, $new_prenom, $new_d_e, $new_fonction, int $new_salaire, $new_service) {
        $this->nom = $new_nom;
        $this->prenom = $new_prenom;
        $this->d_e = $new_d_e;
        $this->fonction = $new_fonction;
        $this->salaire = $new_salaire;
        $this->service = $new_service;
    }

    /*public function AfficherDE() {
        echo $this->d_e;
    }*/

    public function PrimeAnnuel() {
        $today = new DateTime();
        $DateVersement = new DateTime("30-11-2000");

        if($today->format('d-m') == $DateVersement->format('d-m')) {
            $dateEmbauche = new DateTime($this->d_e);

            $stampToday = strtotime($today->format('d-m-Y'));
            $stampDateEmbauche = strtotime($dateEmbauche->format('d-m-Y'));

            $yearToday = date('Y', $stampToday);
            $yearDateEmbauche = date('Y', $stampDateEmbauche);

            $intervalDate = $yearToday - $yearDateEmbauche;
            
            $salaire = $this->salaire * 1000;
            
            $prime = ($salaire * 0.05) + (($salaire * 0.02) * $intervalDate);

            echo 'Votre prime a bien été versée, pour un montant de ' . $prime . '€ <br>';
        } else {
            echo "La date du versement des primes pour " . $this->nom . " " . $this->prenom . " est prévus le " . $DateVersement->format('d/m') . "<br>";
        }
    }
}