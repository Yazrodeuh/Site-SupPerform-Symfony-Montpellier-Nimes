<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends AbstractController
{
    /**
     * @Route("/notre-ecole/nos-locaux", name="locaux")
     * @return Response
     */
    public function locaux(): Response
    {
        return $this->render('entreprise/locaux.html.twig', [
            'controller_name' => 'EntrepriseController',
        ]);
    }

    /**
     * @Route("/notre-ecole/notre-equipe", name="equipe")
     * @return Response
     */
    public function equipe(): Response
    {
        return $this->render('entreprise/equipe.html.twig', [
            'controller_name' => 'EntrepriseController',
        ]);
    }

    /**
     * @Route("/notre-ecole/groupe-perform", name="groupe")
     * @return Response
     */
    public function groupe(): Response
    {
        return $this->render('entreprise/groupe.html.twig', [
            'controller_name' => 'EntrepriseController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     * @return Response
     */
    public function contact(Request $request)
    {

        $form = $this->createForm(ContactType::class);

        if($request->isMethod('post')){

            return new JsonResponse($request->request->all());
        }


        return $this->render('entreprise/contact.html.twig', [
            'controller_name' => 'EntrepriseController',
            'my_form' => $form->createView()
        ]);
    }
}
