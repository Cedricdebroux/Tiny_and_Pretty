<?php

namespace App\Controller;

use App\Entity\Baby;
use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BabyController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }
    #[Route('/baby', name: 'baby')]
    public function index(): Response
    {
        $product = $this->entityManager->getRepository(Baby::class)->findAll();
    return $this->render('product/index.html.twig',[
        'product'=>$product
        ]);
    }
}
