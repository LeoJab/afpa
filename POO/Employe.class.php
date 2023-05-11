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
        $date = new DateTime($this->d_e);

        $stampToday = strtotime($today->format('d-m-Y'));
        $stampDate = strtotime($date->format('d-m-Y'));

        /*echo date($stampToday);
        echo date($stampDate);*/
        
        $interval = $stampDate->diff($stampToday);
        
        echo $interval->format('d/m/Y');
    }
}