<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorDetailsController extends AbstractController
{
    #[Route('/author_details/{id}', name: 'author_details')]
    public function index($id): Response
    {
        $authors = array( array('id' => 1, 'picture' => '/images/vh.jpeg','username' =>
            'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100), array('id' => 2, 'picture' => '/images/ws.jpg','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ), array('id' => 3, 'picture' =>
            '/images/th.jpg','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        $author = array();
        foreach($authors as $authorData) {
            if ($authorData['id'] == $id) {
                $author = $authorData;
                break;
            }
        }
        return $this->render('author_details/index.html.twig', [
            'author' => $author,
        ]);

    }
}
