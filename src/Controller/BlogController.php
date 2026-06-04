<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/destinations', name: 'app_destinations')]
    public function destinations(): Response
    {
        // Plus tard, nous irons chercher toutes les catégories (Europe, Asie...) ici
        return $this->render('blog/destinations.html.twig', [
            'page_title' => 'Nos Destinations de Voyage',
        ]);
    }

    #[Route('/conseils', name: 'app_conseils')]
    public function conseils(): Response
    {
        // Plus tard, nous filtrerons pour n'afficher que les articles de la catégorie "Conseils"
        return $this->render('blog/conseils.html.twig', [
            'page_title' => 'Conseils & Astuces de Voyageurs',
        ]);
    }
}