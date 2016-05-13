<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstOpType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('desde', 'datetime', array(
                    'widget' => 'single_text',
                    'label' => 'Desde',
                    'format' => 'dd-MM-yyyy H:mm',
                    'attr' => array(
                        'class' => 'datepicker'
                    )
                ))
                ->add('hasta', 'datetime', array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy H:mm',  
                    'label' => 'Hasta',
                    'attr' => array(
                        'class' => 'datepicker'
                    )
                ))
//            ->add('activo')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\EstOp'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_estop';
    }

}
