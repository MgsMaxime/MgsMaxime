<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_home')]
    #[Route('/home', name: 'main_home_2')]
    public function home(): Response
    {
        return $this->render('bodyStructure/main/home.html.twig');
    }

    #[Route('/about-us', name: 'main_about_us')]
    public function aboutUs(): Response
    {
        return $this->render('page/aboutUs.html.twig');
    }
}
