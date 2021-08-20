<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeuxiemeVieController extends AbstractController
{
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    #[Route('/deuxieme/vie', name: 'deuxieme_vie')]
    public function index(): Response
    {
        $category = $this->entityManager->getRepository(Category::class)->findAll();
        $product = $this->entityManager->getRepository(Products::class)->findAll();
        return $this->render('deuxieme_vie/index.html.twig', [
            'controller_name' => 'DeuxiemeVieController',
            'category' => $category,
            'product' => $product
        ]);
    }
}
