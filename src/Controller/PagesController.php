<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/Pageprincipal', name: 'Pageprincipal')]
    public function Pagel(): Response
    {
        return $this->render('Pageprincipal.html.twig');
    }

    #[Route('/Profil', name: 'Profil')]
    public function page2(): Response
    {
        return $this->render('Profil.html.twig');
    }

    #[Route('/Article', name: 'Article')]
    public function page3(): Response
    {
        return $this->render('Article.html.twig');
    }

    #[Route('/Panier', name: 'Panier')]
    public function page4(): Response
    {
        return $this->render('Panier.html.twig');
    }
    // chat

    #[Route('/Chat', name: 'Chat')]
    public function page5(): Response
    {
        return $this->render('Chat.html.twig');
    }
    //admin

    #[Route('/PosteAdmin', name: 'PosteAdmin')]
    public function page6(): Response
    {
        return $this->render('PosteAdmin.html.twig');
    }

    // connexion
    #[Route('/Connexion', name: 'Connexion')]
    public function page7(): Response
    {
        return $this->render('Connexion.html.twig');
    }
    //inscription
    #[Route('/Inscription', name: 'Inscription')]
    public function page8(): Response
    {
        return $this->render('Inscription.html.twig');
    }


}
?>