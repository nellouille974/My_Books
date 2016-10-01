<?php

namespace NL\BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BooksBundle\Entity\Book;

class BookController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$entities = $em ->getRepository('NLBooksBundle:Book')->findAll();
        
        return $this->render('NLBooksBundle:Book:index.html.twig', array(
        	'entities' => $entities
        ));
    }

    public function addAction()
    {
    	return $this->render('NLBooksBundle:Book:add.html.twig');
    }
}

