<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #Establecemos la ruta inicial del proyecto

    /**
     * @Route("/", name="homepage")
     */    
    public function homePage(): Response
    {
        return $this->render('home/homepage.html.twig');
    }
}