<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CvType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomCv')
		->add('templateId', EntityType::class, array(
			// looks for choices from this entity
			'class' => 'AppBundle:Templates',

			// uses the User.username property as the visible option string
			'choice_label' => 'nomTemlate',

			// used to render a select box, check boxes or radios
			 'multiple' => false,
             'label' => "Template : ",
            'attr' => ['class' => 'chosen-select form-control tmpl'],
            'label_attr' => ['class' => 'form-control-label'],
			'placeholder'=> "Choisir..."
        ))
		->add('userId');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cv'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cv';
    }


}
