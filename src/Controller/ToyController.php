<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchToy;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToyController extends AbstractController
{
    #[Route('/toy', name: 'productsToy')]
    public function index(ProductsRepository $repository, request $request): Response
    {
        $data = new searchData();
        $form4 = $this->createForm(SearchToy::class, $data);
        $form4->handleRequest($request);
        $productsToy = $repository->findSearchToy($data);
        return $this->render('product/toy/productsToys.html.twig', [
            'productsToy' => $productsToy,
            'form4'=> $form4->createView()
        ]);
    }
}
