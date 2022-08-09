<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            // ->add('email', EmailType::class, [
            //     'label' => 'Votre email',
            //     'attr' => [
            //         'placeholder' => 'Merci de saisir votre adresse e-mail'
            //     ]
            // ])
            ->add('password', PasswordType::class)
            // ->add('password', PasswordType::class, [
            //     'label' => 'Votre mot de passe',
            //     'attr' => [
            //         'placeholder' => 'Merci de saisir un mot de passe'
            //     ]
            // ])
            ->add('password_confirm', PasswordType::class, [
                'label' => 'Confirmez votre mot de passe',
                'mapped' => false
            ])
            // ->add('password_confirm', PasswordType::class, [
            //     'label' => 'Confirmez votre mot de passe',
            //     'mapped' => false,
            //     'attr' => [
            //         'placeholder' => 'Confirmez votre mot de passe'
            //     ]
            // ])
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
