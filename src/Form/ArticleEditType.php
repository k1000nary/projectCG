<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('auteur')
            ->add('contenu')
            ->add('description')
            ->add('date')
            ->add('publication', ChoiceType::class, [
                'label' => 'Publié', 'choices'=>[
                    'Oui'=>'true', 'Non'=>'false'
                ]
            ])
            ->add('categories',EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'multiple'=>true,
                'expanded'=>true,
            ])
            ->add('image')
            ->add('ok', SubmitType::class, ['label' => 'Mettre à jour'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
