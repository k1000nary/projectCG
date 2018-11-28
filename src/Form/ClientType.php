<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientNom')
            ->add('clientPrenom')
            ->add('clientGenre')
            ->add('clientNomUsage')
            ->add('clientDateNaissance', DateType::class, array(
                    'widget' => 'single_text',
                    ))
            ->add('clientLieuNaissance')
            ->add('clientDptNaissance')
            ->add('clientPaysNaissance')
            ->add('clientContact', ContactType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}