<?php
require_once "Employe.class.php";

$employer1 = new Employe;

$employer1->SetNewEmploye('Test', 'Test', "01-01-2000", 'test', 36, 'test');
//$employer1->AfficherDE();
$employer1->PrimeAnnuel();