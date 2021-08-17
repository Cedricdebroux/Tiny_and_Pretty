<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GirlController extends AbstractController
{
    #[Route('/girl', name: 'girl')]
    public function index(): Response
    {
        return $this->render('girl/index.html.twig', [
            'controller_name' => 'GirlController',
        ]);
    }
}
