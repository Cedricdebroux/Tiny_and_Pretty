<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TinyworldController extends AbstractController
{
    #[Route('/tinyworld', name: 'tinyworld')]
    public function index(): Response
    {
        return $this->render('tinyworld/index.html.twig', [
            'controller_name' => 'TinyworldController',
        ]);
    }
}
