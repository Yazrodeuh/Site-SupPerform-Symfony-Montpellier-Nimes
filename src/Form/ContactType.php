<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieu', ChoiceType::class, [
                'choices' => [
                    'Montpellier' => 'Montpellier',
                    'Nîmes' => 'Nimes',
                ],
                'expanded' => true
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'input',
                    'placeholder' => 'PRENOM',
                    'pattern' => '[A-Za-z\-]+',
                ]
            ])
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'input',
                    'placeholder' => 'NOM',
                    'pattern' => '[A-Za-z\-]+',
                ]
            ])
            ->add('mail', EmailType::class, [
                'attr' => [
                    'class' => 'input',
                    'placeholder' => 'COURRIEL',
                    'pattern' => '[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}',
                ]
            ])
            ->add('objet', TextType::class, [
                'attr' => [
                    'class' => 'input',
                    'placeholder' => 'SUJET DE VOTRE MESSAGE',
                ]
            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'class' => 'input',
                    'placeholder' => 'SAISISSEZ VOTRE MESSAGE',
                ]
            ])
            ->add('envoyer', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'button'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

}
