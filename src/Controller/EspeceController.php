<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EspeceRepository;

class EspeceController extends AbstractController
{
    /**
     * @Route("/especes", name="especes")
     */
    public function index(EspeceRepository $repo): Response
    {
        $especes = $repo->findAll();
        return $this->render('espece/index.html.twig', [
            'controller_name' => 'EspeceController',
            'especes'=>$especes
        ]);
    }

    /**
     * @Route("/espece/{id}", name="afficher_espece")
    */
    public function afficherEspece(EspeceRepository $repository, $id)
    {
        $unespece = $repository->find($id);
        return $this->render('espece/afficheEspece.html.twig',[
        "espece" => $unespece
    ]);
    }
}
