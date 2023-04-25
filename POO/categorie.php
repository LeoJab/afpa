<?php

class Categorie {
    public $id;
    public $nom;
    public $description;
  
    public function __construct($id, $nom, $description) {
      $this->id = $id;
      $this->nom = $nom;
      $this->description = $description;
    }
  
    public function afficher() {
      echo $this->id . " " . $this->nom . " : " . $this->description;
    }
  
  }