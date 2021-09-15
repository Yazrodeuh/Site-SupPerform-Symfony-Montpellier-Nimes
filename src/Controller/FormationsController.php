<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FormationsController extends AbstractController
{
    /**
     * @Route("/formations/{nomFormation}", name="formations")
     */
    public function formations(string $nomFormation): Response
    {

        if($nomFormation == "prepa-pass"){
            return $this->render('formations/pass.html.twig');
        }elseif ($nomFormation == "prepa-las"){
            return $this->render('formations/las.html.twig');
        }elseif ($nomFormation == "sp-zero"){
            return $this->render('formations/spZero.html.twig');
        }elseif ($nomFormation == "premiere-sante"){
            return $this->render('formations/premiereSante.html.twig');
        }elseif ($nomFormation == "terminale-sante"){
            return $this->render('formations/terminaleSante.html.twig');
        }


        return $this->render('formations/pass.html.twig', [
            'controller_name' => 'ControllerFormationsController',
        ]);
    }
}
