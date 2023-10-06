<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/{author}', name: 'app_author')]
    public function nameAuthor($author): Response
    {

        return $this->render('author/index.html.twig', [
            'author_name' => $author,
        ]);
    }
}
