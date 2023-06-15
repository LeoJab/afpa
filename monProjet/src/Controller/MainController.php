<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;

class MainController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function accueil(CategorieRepository $categorieRepository, PlatRepository $platRepository): Response
    {

        $categorie = $categorieRepository->selectCategorieLimit(5);
        $plats = $platRepository->selectPlatLimit(3);

        return $this->render('main/accueil.html.twig', [
            'controller_name' => 'MainController',
            'categorie' => $categorie,
            'plat' => $plats
        ]);
    }

    #[Route('/categorie', name: 'categorie')]
    public function categorie(CategorieRepository $categorieRepository): Response
    {
        $categoriesActives = $categorieRepository->selectCategorieAllActive('yes');
        $categoriesNoneActives = $categorieRepository->selectCategorieAllActive('no');

        return $this->render('main/categories.html.twig', [
            'controller_name' => 'MainController',
            'categoriesActives' => $categoriesActives,
            'categoriesNoneActives' => $categoriesNoneActives
        ]);
    }

    #[Route('/plat', name: 'plat')]
    public function plat(PlatRepository $platRepository): Response
    {
        $platsActives = $platRepository->selectPlatAllActive('yes');

        return $this->render('main/plats.html.twig', [
            'controller_name' => 'MainController',
            'platsActives' => $platsActives
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);
        // ...
        // A partir de la version 6.2 de Symfony, on n'est plus obligé d'écrire 
        // $form->createView(), il suffit de passer l'instance de FormInterface 
        // à la méthode render

        return $this->render('main/contact.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form
        ]);
    }

}
