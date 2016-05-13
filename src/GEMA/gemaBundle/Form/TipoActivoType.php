<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoActivoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('codificador', null, array(
                    'label' => 'Codificador',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'XXXXX',
                        'pattern' => '.{1,5}' //minlength,
                    )
                ))
                ->add('tipoActivo', null, array(
                    'label' => 'Tipo de Activo',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => 'Climatizador',
                        'pattern' => '.{4,}' //minlength,
                    )
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\TipoActivo'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_tipoactivo';
    }

}
