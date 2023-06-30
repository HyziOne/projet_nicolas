<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/politique-de-confidentialite")
 */
class PolitiqueConfidentialiteController extends AbstractController
{
    /**
     * @Route("", name="politique_de_confidentialite")
     */
    public function index(): Response
    {
        return $this->render('conformite/politique-de-confidentialite.html.twig');
    }
}
