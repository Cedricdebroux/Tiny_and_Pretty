<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToyController extends AbstractController
{
    #[Route('/toy', name: 'toy')]
    public function index(): Response
    {
        return $this->render('toy/index.html.twig', [
            'controller_name' => 'ToyController',
        ]);
    }
}
