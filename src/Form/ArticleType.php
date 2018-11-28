<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('description')
            ->add('publication', ChoiceType::class, [
                'label' => 'Publié', 'choices'=>[
                    'Non'=>'false', 'Oui'=>'true'
                ]
            ])
            ->add('categories',EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'multiple'=>true,
                'expanded'=>true,
                'mapped' => false,
            ])
            ->add('image',ImageType::class)
            ->add('ok', SubmitType::class, ['label' => 'Ajouter'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
