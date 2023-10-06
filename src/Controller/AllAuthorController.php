<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AllAuthorController extends AbstractController
{

    #[Route('/all/author', name: 'app_all_author')]
    public function index(): Response
    {
        $authors = array( array('id' => 1,'username' =>
            'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100), array('id' => 2,'username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ), array('id' => 3, 'username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
        );

        return $this->render('all_author/index.html.twig', [
            'controller_name' => 'AllAuthorController',
            'authors' => $authors
        ]);
    }


}
