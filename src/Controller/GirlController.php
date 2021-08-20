<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GirlController extends AbstractController
{
    #[Route('/girl', name: 'productsGirl')]
    public function index(ProductsRepository $repository, request $request): Response
    {
        $data = new searchData();
        $form2 = $this->createForm(SearchForm::class, $data);
        $form2->handleRequest($request);
        $productsGirl = $repository->findSearch($data);
        return $this->render('product/girl/productsGirl.html.twig', [
            'productsGirl' => $productsGirl,
            'form2'=> $form2->createView()
        ]);
    }
}
