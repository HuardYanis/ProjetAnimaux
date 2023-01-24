<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ContinentRepository;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="app_continent")
     */
    public function index(ContinentRepository $cr): Response
    {
        $continents = $cr->findAll();
        return $this->render('continent/index.html.twig', [
            'controller_name' => 'ContinentController',
            'continents' => $continents
        ]);
    }
}
