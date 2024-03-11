<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AwesomeController extends AbstractController
{
    #[Route('/awesome', name: 'app_awesome')]
    public function index(): Response
    {
        return $this->render('awesome/index.html.twig', [
            'controller_name' => 'AwesomeController',
        ]);
    }
}
