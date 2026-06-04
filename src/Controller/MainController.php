<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Plus tard, nous irons chercher les 3 derniers articles ici pour le jury !
        return $this->render('main/index.html.twig', [
            'page_title' => 'Bienvenue sur Voyage-Voyage',
        ]);
    }

    #[Route('/a-propos', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'page_title' => 'À propos de notre blog',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'page_title' => 'Contactez-nous',
        ]);
    }
}