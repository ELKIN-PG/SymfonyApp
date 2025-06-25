<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #Establecemos la ruta inicial del proyecto

    #[Route('/home', name: 'home')]    
    public function homePage(): Response
    {
        return $this->render('home/homepage.html.twig');
    }
}