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
    public function accueil(PlatRepository $platRepo, CategorieRepository $categorieRepo)
    {

        $plats = $platRepo->findAll();
        $categories = $categorieRepo->findAll();

        return $this->render('main/accueil.html.twig', [
            'controller_name' => 'MainController',
            'plats' => $plats,
            'categories' => $categories
        ]);
    }

    #[Route('/categorie', name: 'categorie')]
    public function categorie(CategorieRepository $categorieRepo)
    {
        $categories = $categorieRepo->findAll();

        return $this->render('main/categories.html.twig', [
            'controller_name' => 'MainController',
            'categories' => $categories
        ]);
    }

    #[Route('/plat', name: 'plat')]
    public function plat(PlatRepository $platRepository): Response
    {
        $plats = $platRepository->findAll();

        return $this->render('main/plats.html.twig', [
            'controller_name' => 'MainController',
            'plats' => $plats
        ]);
    }

    #[Route('/plat/{categorie_id}', name: 'plat_categorie')]
    public function plat_categorie($categorie_id, Request $request): Response
    {
        $categorie_id = $request->get('categorie_id');
        $categorie = $CategorieRepository->find($categorie_id);
        $plats = $categorie->getPlats();

        return $this->render('main/plats.html.twig', [
            'controller_name' => 'MainController',
            'plats' => $plats
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
