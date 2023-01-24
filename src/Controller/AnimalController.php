<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnimalRepository;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animaux", name="animal")
     */
    public function index(AnimalRepository $ar): Response
    {
        $animaux = $ar->findAll();
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animaux' => $animaux
        ]);
    }

    /**
     * @Route("/animal/{id}", name="afficher_animal")
    */
    public function afficherAnimal(AnimalRepository $repository, $id)
    {
        $unanimal = $repository->find($id);
        return $this->render('animal/afficheAnimal.html.twig',[
        "animal" => $unanimal
    ]);
    }
}
