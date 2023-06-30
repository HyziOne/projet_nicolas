<?php
// src/Controller/DevisController.php
namespace App\Controller;

use App\Form\DevisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DevisController extends AbstractController
{
        /**
         * @Route("/devis", name="devis")
         */
        public function devis(Request $request)
        {
        $form = $this->createForm(DevisType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $prix = $this->calculerPrix($data);

            // code pour sauvegarder les données du formulaire et le prix dans la base de données

            return $this->render('devis/resultat.html.twig', [
                'prix' => $prix,
            ]);
        }

        return $this->render('devis/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function calculerPrix($data)
    {
        $prixBase = 1000; // prix de base pour tous les projets

        // ajoutons des coûts supplémentaires en fonction du type de site
        switch ($data['typeDeSite']) {
            case 'Site vitrine / Site institutionnel d\'entreprise / Site de marque':
                $prixBase += 500;
                break;
            case 'Blog':
                $prixBase += 200;
                break;
            case 'E-Commerce / Boutique en ligne':
                $prixBase += 1000;
                break;
            case 'Autres':
                $prixBase += 300;
                break;
        }

        // ajoutons des coûts supplémentaires en fonction de la nature du projet
        switch ($data['natureDuProjet']) {
            case 'Création':
                $prixBase += 500;
                break;
            case 'Refonte':
                $prixBase += 400;
                break;
            case 'Ajout de fonctionnalités sur un site existant':
                $prixBase += 300;
                break;
            case 'Formation / Assistance':
                $prixBase += 200;
                break;
            case 'Autres':
                $prixBase += 100;
                break;
        }

        return $prixBase;
    }

}
