<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaiementSecuriseController extends AbstractController
{
    #[Route('/paiement/securise', name: 'paiement_securise')]
    public function index(): Response
    {
        return $this->render('paiement_securise/index.html.twig', [
            'controller_name' => 'PaiementSecuriseController',
        ]);
    }
}
