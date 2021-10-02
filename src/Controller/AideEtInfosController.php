<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AideEtInfosController extends AbstractController
{

    /**
     * @Route ("/reforme-Pass-LAS", name="reforme")
     * @return Response
     */
    public function reformePassLas(): Response{
        return $this->render('aide_et_infos/reformePassLas.html.twig');
    }

    /**
     * @Route("/actualites", name="actus")
     * @return Response
     */
    public function actus(): Response
    {
        return $this->render('aide_et_infos/actus.html.twig');
    }
}
