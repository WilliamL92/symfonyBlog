<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homeController extends AbstractController{

/**
 * @Route("/home", name="home")
 */

    public function home(){
        return $this->render('index.html.twig');
    }

    /**
    * @Route("/articles", name="articles")
    */

    public function articles(){
        return $this->render('articles.html.twig');
    }

    /**
    * @Route("/contact", name="contact")
    */

    public function contact(){
        return $this->render('contact.html.twig');
    }

    /**
    * @Route("/pageArticle", name="pageArticle")
    */

    public function pageArticle(){
        return $this->render('pageArticle.html.twig');
    }
}