<?php
require_once "Personnage.class.php";

$p = new Personnage();

$p->setNewPerso("Lebowski", "Jeff", 25, "M");

$p->Afficher();