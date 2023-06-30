<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mentions-legales")
 */
class MentionsLegalesController extends AbstractController
{
    /**
     * @Route("", name="mentions_legales")
     */
    public function index(): Response
    {
        return $this->render('conformite/mentions-legales.html.twig');
    }
}
