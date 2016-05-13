<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cIdentidad', null, array('label' => 'CI'))
                ->add('nombre')
                ->add('apellidos')
                ->add('sexo', 'choice', array(
                    'choices' => array('FEMENINO' => 'Femenino', 'MASCULINO' => 'Masculino'),
                    'required' => true,
                ))
                ->add('direccion', null, array(
                    'label' => 'Dirección',
                    'required' => false,
                    ))
                ->add('profesion', null, array(
                    'label' => 'Profesión',
                    'required' => false,
                    ))
                ->add('cargo', null, array(
                    'label' => 'Cargo',
                    'required' => false,
                    ))
                ->add('salario', null, array('label' => 'Salario ($)'))                
                ->add('usuario', 'entity', array(
                    'class' => 'gemaBundle:Usuario',
                    'required' => false,
                    'empty_value' => "Seleccione un Usuario"
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_persona';
    }

}
