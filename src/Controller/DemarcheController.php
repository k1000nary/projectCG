<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemarcheController extends AbstractController
{
    /**
     * @Route("/demarche", name="demarche")
     */
    public function index()
    {
        return $this->render('demarche/index.html.twig', [
            'controller_name' => 'DemarcheController',
        ]);
    }
}
