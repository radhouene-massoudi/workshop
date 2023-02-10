<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorshopController extends AbstractController
{
    #[Route('/worshop', name: 'app_worshop')]
    public function index(): Response
    {
        return $this->render('worshop/index.html.twig', [
            'controller_name' => 'WorshopController',
        ]);
    }
    #[Route('/integration', name: 'integration')]
    public function integration(): Response
    {
        return $this->render('worshop/integration.html.twig');
    }
}
