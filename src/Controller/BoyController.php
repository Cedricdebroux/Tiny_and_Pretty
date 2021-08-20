<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchType;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoyController extends AbstractController
{
    #[Route('/boy', name: 'productsBoys')]
    public function index(ProductsRepository $repository, request $request): Response
    {
        $data = new searchData();
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $productsBoy = $repository->findSearchBoy($data);

        return $this->render('product/boys/productsBoys.html.twig', [
            'productsBoys' => $productsBoy,
            'form' => $form->createView(),
        ]);
    }
}
