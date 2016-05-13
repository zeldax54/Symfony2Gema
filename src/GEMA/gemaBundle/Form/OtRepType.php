<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OtRepType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('repuesto', 'entity', array(
                    'class' => 'gemaBundle:Repuesto',
                    'required' => true,
                    'label' => 'Repuesto'
                ))
//                ->add('ordenTrabajo', 'entity', array(
//                    'class' => 'gemaBundle:OrdenTrabajo',
//                    'required' => true,
//                    'empty_value' => "Seleccione una Orden de Trabajo",
//                    'label' => 'Orden de Trabajo'
//                ))
                ->add('cantidad', null, array(
                    'required' => true,
                    'label' => 'Cantidad'
                ))
//                ->add('costo')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\OtRep'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_otrep';
    }

}
