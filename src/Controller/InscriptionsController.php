<?php
// src/Controller/InscriptionController.php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionsController extends AbstractController
{

    #[Route("/Inscription", name: "Inscription")]
    public function index(Request $request)
    {
        $profil = new Profil(); // Créez une nouvelle instance de Profil ici
        $form = $this->createForm(InscriptionType::class, $profil); // Créez une instance de votre formulaire ici
        return $this->render('Inscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
?>