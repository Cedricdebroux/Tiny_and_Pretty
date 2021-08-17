<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoyController extends AbstractController
{
    #[Route('/boy', name: 'boy')]
    public function index(): Response
    {
        return $this->render('boy/index.html.twig', [
            'controller_name' => 'BoyController',
        ]);
    }
}
