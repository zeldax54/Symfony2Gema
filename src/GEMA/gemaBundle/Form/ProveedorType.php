<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProveedorType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proveedor', null, array(
                'attr' => array(
                        'placeholder' => 'Desoft',
                        'pattern' => '.{4,}' //minlength,
                    ),
                    'required' => true
            ))
            ->add('email', 'email', array(
                'label'=>'Correo',
                'attr' => array(
                        'placeholder' => 'correo@dominio.cu',
                        'pattern' => '.{4,}' //minlength,
                    ),
                    'required' => false
                ))
            ->add('direccion',null , array(
                'label'=>'Dirección',
                'attr' => array(
                        'placeholder' => 'Calle, número y municipio de su proveedor',
                        'pattern' => '.{4,}' //minlength,
                    ),
                    'required' => false
                ))
            ->add('telefono', null, array(
                'label'=>'Teléfono',
                'attr' => array(
                        'placeholder' => '7 832 5024'
                    ),
                    'required' => false
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Proveedor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gema_gemabundle_proveedor';
    }
}
