<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Repository\PlatRepository;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'panier')]
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

        return $this->render('main/panier.html.twig', [
            'controller_name' => 'PanierController',
            'plats' => $panierData,
            'total' => $total
        ]);
    }

    #[Route('/panier/add/{id}', name: 'addPanier')]
    public function addPanier($id, RequestStack $requestStack)
    {
        $session = $requestStack->getSession();
        $panier = $session->get('panier', []);
        
        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id]= 1;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("panier");

    }

    #[Route('/panier/deduct/{id}', name: 'deductPanier')]
    public function deductPanier($id, RequestStack $requestStack, MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('hello@example.com')
            ->to('you@example.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        $session = $requestStack->getSession();
        $panier = $session->get('panier', []);
        
        if(!empty($panier[$id])) {
            $panier[$id]--;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("panier");

        //dd($session->get('panier'));

    }

    #[Route('/panier/remove/{id}', name: 'removePanier')]
    public function removePanier($id, RequestStack $requestStack)
    {
        $session = $requestStack->getSession();
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("panier");
    }
}
