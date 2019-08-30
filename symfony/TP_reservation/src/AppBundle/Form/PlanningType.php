<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanningType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('halfDay', ChoiceType::class, [
            "choices" => [
                "Matin" => "Matin",
                "Aprem" => "Aprem"
            ]
        ]);
        $builder->add('day', ChoiceType::class, [
            "choices" => [
                "Lundi" => "Lundi",
                "Mardi" => "Mardi",
                "Mercredi" => "Mercredi",
                "Jeudi" => "Jeudi",
                "Vendredi" => "Vendredi"
            ]
        ]);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Planning',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_planning';
    }


}
