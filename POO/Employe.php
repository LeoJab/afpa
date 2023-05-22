<?php
require_once "Employe.class.php";
require_once "Magasin.class.php";

//MAGASINS
$magasin1 = new Magasin;
$magasin1->SetNewMagasin('Magasin1', 'Adresse du magasin', 80000, 'Amiens', 'Oui');
$magasin1->AfficherMagasin();

$magasin2 = new Magasin;
$magasin2->SetNewMagasin('Magasin2', 'Adresse du magasin', 80000, 'Amiens', 'Oui');
$magasin2->AfficherMagasin();

$magasin3 = new Magasin;
$magasin3->SetNewMagasin('Magasin3', 'Adresse du magasin', 80000, 'Amiens', 'Non');
$magasin3->AfficherMagasin();

$magasin4 = new Magasin;
$magasin4->SetNewMagasin('Magasin4', 'Adresse du magasin', 80000, 'Amiens', 'Oui');
$magasin4->AfficherMagasin();

$magasin5 = new Magasin;
$magasin5->SetNewMagasin('Magasin5', 'Adresse du magasin', 80000, 'Amiens', 'Non');
$magasin5->AfficherMagasin();

//EMPLOYES
$employer1 = new Employe;
$employer1->SetNewEmploye('Test', 'Test', "01-01-2000", 'test', 36, 'test', 'Magasin1');
$employer1->InformationEmploye();
//$employer1->PrimeAnnuel();

$employer2 = new Employe;
$employer2->SetNewEmploye('Test', 'Test', "01-01-2005", 'test', 28, 'test', 'Magasin2');
$employer2->InformationEmploye();
//$employer2->PrimeAnnuel();

$employer3 = new Employe;
$employer3->SetNewEmploye('Test', 'Test', "01-01-2018", 'test', 24, 'test', 'Magasin3');
$employer3->InformationEmploye();
//$employer3->PrimeAnnuel();

$employer4 = new Employe;
$employer4->SetNewEmploye('Test', 'Test', "01-01-2013", 'test', 26, 'test', 'Magasin4');
$employer4->InformationEmploye();
//$employer4->PrimeAnnuel();

$employer5 = new Employe;
$employer5->SetNewEmploye('Test', 'Test', "01-01-1995", 'test', 42, 'test', 'Magasin5');
$employer5->InformationEmploye();
//$employer5->PrimeAnnuel();

