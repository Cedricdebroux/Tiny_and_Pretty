<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeuxiemeVieController extends AbstractController
{
    #[Route('/deuxieme/vie', name: 'deuxieme_vie')]
    public function index(): Response
    {
        return $this->render('deuxieme_vie/index.html.twig', [
            'controller_name' => 'DeuxiemeVieController',
        ]);
    }
}
