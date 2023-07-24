<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\PlatRepository;

class PlatDetailController extends AbstractController
{
    #[Route('/plat_detail/{plat_id}', name: 'app_plat_detail')]
    public function plat_detail(Request $request, PlatRepository $platRepo): Response
    {
        $plat_id = $request->get('plat_id');
        $plat = $platRepo->findPlat($plat_id);
        //dd($plat);

        return $this->render('main/plat_detail.html.twig', [
            'controller_name' => 'PlatDetailController',
            'plats' => $plat
        ]);
    }
}
