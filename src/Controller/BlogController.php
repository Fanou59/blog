<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\MessageType;
use App\Entity\Message;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('blog/index.html.twig', []);
    }
    #[Route('/blog', name: 'app_blog')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $articles = $entityManager->getRepository(Articles::class)->findAll();
        return $this->render('blog/blog.html.twig', [
            'articles' => $articles,

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
            'controller_name' => 'Consultations',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $Message = new Message();
        $contactForm = $this->createForm(MessageType::class, $Message);
        return $this->render('blog/contact.html.twig', [
            'contactform' => $contactForm,
        ]);
    }

    #[Route('/rdv', name: 'app_rdv')]
    public function rdv(): Response
    {
        return $this->render('blog/rdv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/articles/{id}', name: 'articles')]
    public function article(int $id, ArticlesRepository $repo): Response
    {
        $article = $repo->find($id);
        return $this->render('articles/article.html.twig', [
            'controller_name' => 'ArticlesController',
            'article' => $article,
        ]);
    }
}
