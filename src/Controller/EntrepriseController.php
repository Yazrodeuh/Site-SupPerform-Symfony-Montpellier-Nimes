<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends AbstractController
{
    /**
     * @Route("/notre-ecole/nos-locaux", name="locaux")
     */
    public function locaux(): Response
    {
        return $this->render('entreprise/index.html.twig', [
            'controller_name' => 'EntrepriseController',
        ]);
    }

    /**
     * @Route("/notre-ecole/groupe-perform", name="groupe")
     */
    public function groupe(): Response
    {
        return $this->render('entreprise/groupe.html.twig', [
            'controller_name' => 'EntrepriseController',
        ]);
    }
}
