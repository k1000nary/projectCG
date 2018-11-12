<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DemandeController extends AbstractController
{
    /**
     * @Route("/demande", name="demande")
     */
    public function index(ObjectManager $manager, Request $request)
    {
        $demande = new Demande();
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

        }
        return $this->render('demande/index.html.twig', [
            'controller_name' => 'DemandeController',
            'form'=>$form->createView(),
        ]);
    }
}
