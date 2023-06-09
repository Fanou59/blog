<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('blog/blog.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/aboutMe', name: 'app_aboutMe')]
    public function aboutMe(): Response
    {
        return $this->render('blog/aboutMe.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/consultations', name: 'app_consultations')]
    public function consultations(): Response
    {
        return $this->render('blog/consultations.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('blog/contact.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/rdv', name: 'app_rdv')]
    public function rdv(): Response
    {
        return $this->render('blog/rdv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
