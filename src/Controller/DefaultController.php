<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @throws \Exeption
 */

class DefaultController extends AbstractController
{
    
    public function index(): Response   {
        

        return $this->render('base.html.twig');
       
    }
}