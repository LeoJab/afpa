<?php
require_once "Employe.class.php";
require_once "Magasin.class.php";

$employer1 = new Employe;
$employer1->SetNewEmploye('Test', 'Test', "01-01-2000", 'test', 36, 'test');
$employer1->PrimeAnnuel();

$employer2 = new Employe;
$employer2->SetNewEmploye('Test', 'Test', "01-01-2005", 'test', 28, 'test');
$employer2->PrimeAnnuel();

$employer3 = new Employe;
$employer3->SetNewEmploye('Test', 'Test', "01-01-2018", 'test', 24, 'test');
$employer3->PrimeAnnuel();

$employer4 = new Employe;
$employer4->SetNewEmploye('Test', 'Test', "01-01-2013", 'test', 26, 'test');
$employer4->PrimeAnnuel();

$employer5 = new Employe;
$employer5->SetNewEmploye('Test', 'Test', "01-01-1995", 'test', 42, 'test');
$employer5->PrimeAnnuel();

$magasin1 = new Magasin;
$magasin1->SetNewMagasin('Magasin', 'Adresse du magasin', 80000, 'Amiens');
$magasin1->AfficherMagasin();