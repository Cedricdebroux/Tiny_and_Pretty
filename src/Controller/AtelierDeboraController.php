<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AtelierDeboraController extends AbstractController
{
    #[Route('/atelier/debora', name: 'atelier_debora')]
    public function index(): Response
    {
        return $this->render('atelier_debora/index.html.twig', [
            'controller_name' => 'AtelierDeboraController',
        ]);
    }
}
