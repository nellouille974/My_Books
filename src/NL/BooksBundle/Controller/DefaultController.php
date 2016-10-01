<?php

namespace NL\BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NLBooksBundle:Default:index.html.twig');
    }
}
