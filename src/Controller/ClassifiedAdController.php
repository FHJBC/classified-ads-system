<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassifiedAdController extends AbstractController
{
    /**
     * @Route("/classified/ad", name="app_classified_ad")
     */
    public function index(): Response
    {
        return $this->render('classified_ad/index.html.twig', [
            'controller_name' => 'ClassifiedAdController',
        ]);
    }

    /**
     * @Route("/classified/ad/create", name="app_create_classified_ad")
     */
    public function create(): Response
    {
        return $this->render('classified_ad/create.html.twig', [
            'controller_name' => 'ClassifiedAdController',
        ]);
    }
}
