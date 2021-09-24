<?php

namespace App\Controller;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {

        $avis=$this->getDoctrine()->getManager()->getRepository(Avis::class)->findTreeLast();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'dernierAvis' => $avis
        ]);
    }
}
