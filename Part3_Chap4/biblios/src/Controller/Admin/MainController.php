<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/admin/main', name: 'app_admin_main_index')]
    public function index(): Response
    {
        return $this->render('admin/main/index.html.twig');
    }
}
