<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username')
        ->add('first_name')
        //->add('avatar', 'file')
       // ->add('avatar', FileType::class, array('label' => 'Photo de profile'))
     //   ->add('avatar', FileType::class, array(
       //     'label' => "Avatar  : ",
         //   'attr' => ['class' => 'form-control'],
           // 'label_attr' => ['class' => 'form-control-label']))
            //;
        

          ->add('avatar', FileType::class, array(
            'label' => " Avatar  : ",
            'attr' => ['class' => 'form-control'],
            'label_attr' => ['class' => 'form-control-label']


        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
