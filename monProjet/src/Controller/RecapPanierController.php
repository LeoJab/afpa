<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PlatRepository;

class RecapPanierController extends AbstractController
{
    #[Route('/recap_panier', name: 'recap_panier')]
    public function index(RequestStack $requestStack, PlatRepository $platRepo): Response
    {
        $session = $requestStack->getSession();
        $panier = $session->get('panier', []);
        $panierData = [];

        foreach($panier as $id => $quantity){
            $panierData[] = [
                'product' => $platRepo->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach($panierData as $plat) {
            $totalPanier = $plat['product']->getPrix() * $plat['quantity'];
            $total += $totalPanier;
        }

        return $this->render('main/recap_panier.html.twig', [
            'controller_name' => 'PanierController',
            'plats' => $panierData,
            'total' => $total
        ]);
    }

}
