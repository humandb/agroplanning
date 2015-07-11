<?php

namespace AgroPlanning\VehicleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VehicleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('make')
            ->add('model')
            ->add('customer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AgroPlanning\VehicleBundle\Entity\Vehicle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'agroplanning_vehiclebundle_vehicle';
    }
}
