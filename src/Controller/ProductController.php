<?php

namespace App\Controller;

use App\Classe\search;
use App\Data\SearchData;
use App\Entity\Baby;
use App\Entity\Products;
use App\Form\SearchForm;
use App\Form\SearchType;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/nos-produits', name :'products')]

    public function index(ProductsRepository $repository, request $request): Response
    {
        /*autre version*/
        $data = new searchData();
        $form2 = $this->createForm(SearchForm::class, $data);
        $search = new search();
        $form = $this->createForm(SearchType::class, $search);
        $form2->handleRequest($request);
        $products = $repository->findSearch($data);
        $productBaby = $this->entityManager->getRepository(Baby::class)->findAll();

        return $this->render('product/index.html.twig', [
            'products'=>$products,
            'form' => $form->createView(),
            'form2'=> $form2->createView(),
            'productBaby' => $productBaby
        ]);
    }


        #[Route('/productBaby', name :'productBaby')]

        public function baby()
    {
        $productBaby = $this->entityManager->getRepository(Products::class)->findAll();

        return $this->render('product/index.html.twig', [

            'productBaby' => $productBaby
        ]);
    }


        /*    $form->handleRequest($request);*/

      /*  if ($form->isSubmitted() && $form->isValid()) {
            $products = $this->entityManager->getRepository(Products::class)->findWithSearch($search);
        }else {
            $products = $this->entityManager->getRepository(Products::class)->findAll();
        }*/




    #[Route('/produit/{slug}', name :'product')]

    public function show($slug): Response
    {

        $product = $this->entityManager->getRepository(Products::class)->findOneBySlug($slug);
        $products = $this->entityManager->getRepository(Products::class)->findByIsBest(1);
        $productN = $this->entityManager->getRepository(Products::class)->findByIsNew(1);


        if (!$product) {
            return $this->redirectToRoute('products');
        }
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'products' => $products,
            'productN' => $productN
        ]);

    }


}
