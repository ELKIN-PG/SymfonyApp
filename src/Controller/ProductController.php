<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(): Response
    {
        return $this->render('product/product.html.twig');
    }

    #Parametro en el endpoint
    
    #[Route('/product/{id}', name: 'product_show')]
    public function show(int $id): Response
    {
        return $this->render('product/show.html.twig',[
            'product_id' => $id
        ]);
    }
}
