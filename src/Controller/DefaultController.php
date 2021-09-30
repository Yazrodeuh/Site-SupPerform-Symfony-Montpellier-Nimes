<?php

namespace App\Controller;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\EventListener\AbstractSessionListener;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {

        $avis=$this->getDoctrine()->getManager()->getRepository(Avis::class)->findTreeLast();

        $response = $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'dernierAvis' => $avis
        ]);

        /*$response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setCache([

            'max_age'          => 600,
            's_maxage'         => 600,
            'immutable'        => true,
            'last_modified'    => new \DateTime(),
            'etag'             => 'abcdef'
        ]);*/

        return $response;

    }
}
