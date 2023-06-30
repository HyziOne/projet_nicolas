<?php
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        // Ton code pour récupérer les données nécessaires à la page d'accueil
        // par exemple, tu peux utiliser des services, des entités ou des requêtes vers une base de données
        $title = 'Accueil';
        $data = [
            'blocs' => [
                [
                    'title' => 'Titre du premier bloc',
                    'content' => 'Contenu du premier bloc',
                ],
                [
                    'title' => 'Titre du deuxième bloc',
                    'content' => 'Contenu du deuxième bloc',
                ],
                // Ajoute d'autres données de bloc si nécessaire
            ],
        ];

        // Passer les données au template de la page d'accueil pour les afficher
        return $this->render('home/index.html.twig', $data);
    }
}
