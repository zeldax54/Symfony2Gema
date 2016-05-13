<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrdenTrabajoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')                
                ->add('planMtto', 'entity', array(
                    'class' => 'gemaBundle:PlanMtto',
                    'required' => false,
                    'label' => 'Mantenimiento'
                ))
                ->add('procedimientos')
                ->add('cumplida')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\OrdenTrabajo'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_ordentrabajo';
    }

}
