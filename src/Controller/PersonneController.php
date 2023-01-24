<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PersonneRepository;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personnes", name="app_personne")
     */
    public function index(PersonneRepository $repo): Response
    {
        $personnes = $repo->findAll();
        return $this->render('personne/index.html.twig', [
            'controller_name' => 'PersonneController',
            'personnes' => $personnes
        ]);
    }
}
