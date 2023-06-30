<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    public function handleContactForm(Request $request, MailerInterface $mailer): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');

        // Valider et traiter les données du formulaire

        // Envoyer l'e-mail
        $email = (new Email())
            ->from($email)
            ->to('sofiane56240@gmail.com')
            ->subject('Nouveau message de contact')
            ->html('Nom: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message);

        // $mailer->send($email);

        return $this->redirectToRoute('contact_success');
    }

    public function contactForm(): Response
    {
        return $this->render('contact_form.html.twig');
    }

    public function contactSuccess(): Response
    {
        return $this->render('contact_success.html.twig');
    }
}
