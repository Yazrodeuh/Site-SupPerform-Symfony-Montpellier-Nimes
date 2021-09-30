<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AideEtInfosController extends AbstractController
{

    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('aide_et_infos/index.html.twig', [
            'controller_name' => 'AideEtInfosController',
        ]);
    }
}
