<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HerramientaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', null, array(
                    'attr' => array(
                        'placeholder' => 'Carretilla',
                        'pattern' => '.{4,}' //minlength,
                    ),
                    'required' => true
                ))
                ->add('costoUnitario', null, array(
                    'label' => 'Costo Unitario (pesos)',
                    'attr' => array(
                        'placeholder' => '100.50'
                    ),
                    'required' => true
                ))
                ->add('norma', null, array(
                    'label' => 'Norma de Consumo Diario',
                    'attr' => array(
                        'placeholder' => '0.01'
                    ),
                    'required' => true
                ))
                ->add('depreciacionDiaria', null, array(
                    'label' => 'Depreciación ($/Día)',
                    'attr' => array(
                        'placeholder' => '0.10'
                    ),
                    'required' => true
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Herramienta'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_herramienta';
    }

}
