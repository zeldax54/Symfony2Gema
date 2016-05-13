<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FacturaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('proveedor', 'entity', array(
                    'class' => 'gemaBundle:Proveedor',
                    'required' => true
                ))
                ->add('codigo', null, array(
                    'label' => 'Código',
                    'attr' => array(
                        'placeholder' => 'Mínimo 4 caracteres',
                        'pattern' => '.{4,11}' //minlength,
                    )
                ))
                ->add('fecha', 'date', array(
                    'widget' => 'single_text',
                    'label' => 'Fecha',
                ))
                ->add('precio', null, array(
                    'label' => 'Precio Total (Pesos)',
                    'attr' => array(
                        'placeholder' => '4 500'
                    ),
                    'invalid_message' => 'Solo se permite números',
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Factura'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_factura';
    }

}
