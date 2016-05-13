<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccionType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', null, array(
                    'attr' => array(
                        'placeholder' => 'Desmontar el aire acondicionado',
                        'pattern' => '.{4,}' //minlength,
                    ),
                    'required' => true
                ))
                ->add('tiempo', null, array(
                    'label' => 'Tiempo (min)',
                    'attr' => array(
                        'placeholder' => '2',
                    ),
                    'required' => true
                ))
                ->add('procedimiento', 'textarea', array(
                    'required' => false,
                    'label' => 'Descripción'
                ))
        //add('Cancelar', 'button', array(''))
//            ->add('procs')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Accion'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_accion';
    }

}
