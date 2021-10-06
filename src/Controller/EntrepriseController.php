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
        return $this->render('entreprise/locaux.html.twig');
    }

    /**
     * @Route("/notre-ecole/notre-equipe", name="equipe")
     * @return Response
     */
    public function equipe(): Response
    {
        return $this->render('entreprise/equipe.html.twig');
    }

    /**
     * @Route("/notre-ecole/groupe-perform", name="groupe")
     * @return Response
     */
    public function groupe(): Response
    {
        return $this->render('entreprise/groupe.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return Response
     */
    public function contact(Request $request):Response
    {

        $form = $this->createForm(ContactType::class);

        if($request->isMethod('post')){

            $requete = $request->request->get('contact');

            $message = "Lieu : " . $requete['lieu'] . " \nPrénom : " . $requete['prenom'] . " \nNom : " . $requete['nom'] . " \nMail : " . $requete['mail'] . "\n\n" . $requete['message'];
            $header = array(
                'From' => $requete['mail'],
                'Content-Type' => 'text/plain; charset="utf-8"');

            $session = $request->getSession();

            if (mail("contact@sup-perform.fr", $requete['objet'], $message, $header)){
                $session->getFlashBag()->add('message', 'Votre demande de contact a bien été prise en compte.');
                $session->set('statut', 'success');
            }else{
                $session->getFlashBag()->add('message', 'Une erreur s\'est produit, veillez réessayer.');
                $session->set('statut', 'primary');
            }

            return $this->redirect($this->generateUrl('contact'));
        }


        return $this->render('entreprise/contact.html.twig', [
            'my_form' => $form->createView()
        ]);
    }
}
