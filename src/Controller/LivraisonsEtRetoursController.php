<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivraisonsEtRetoursController extends AbstractController
{
    #[Route('/livraisons/et/retours', name: 'livraisons_et_retours')]
    public function index(): Response
    {
        return $this->render('livraisons_et_retours/index.html.twig', [
            'controller_name' => 'LivraisonsEtRetoursController',
        ]);
    }
}
