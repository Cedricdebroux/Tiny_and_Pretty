<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComingsoonController extends AbstractController
{
    #[Route('/comingsoon', name: 'comingsoon')]
    public function index(): Response
    {
        return $this->render('comingsoon/index.html.twig', [
            'controller_name' => 'ComingsoonController',
        ]);
    }
}
