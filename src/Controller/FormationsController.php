<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FormationsController extends AbstractController
{
    /**
     * @Route("/formations/{nomFormation}", name="formations")
     * @param string $nomFormation
     * @return Response
     */
    public function formations(string $nomFormation): Response
    {

        if($nomFormation == "prepa-pass"){
            return $this->render('formations/passBis.html.twig');
        }elseif ($nomFormation == "prepa-las"){
            return $this->render('formations/lasBis.html.twig');
        }elseif ($nomFormation == "sp-zero"){
            return $this->render('formations/spZeroBis.html.twig');
        }elseif ($nomFormation == "premiere-sante"){
            return $this->render('formations/premiereSanteBis.html.twig');
        }elseif ($nomFormation == "terminale-sante"){
            return $this->render('formations/terminaleSanteBis.html.twig');
        }


        return $this->render('default/index.html.twig');
    }

    /**
     * @Route ("/resultats", name="resultats")
     * @return Response
     */
    public function resultat(): Response{
        return $this->render('formations/resultats.html.twig');
    }
}
