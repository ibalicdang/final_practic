<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class myEntitiesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('lastName')
        ->add('firstName')
        ->add('middleName',null,array( 'required' => false))
        ->add('birthDate','date',array('label' => 'date','widget' => 'single_text','html5' => false ))
        ->add('address')
        ->add('telNumber',null,array( 'required' => false))
        ->add('gender')
        ->add('dateEmployed')
        ->add('salary')
        ->add('employeeGroup',null,array( 'required' => false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\myEntities'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_myentities';
    }

}
