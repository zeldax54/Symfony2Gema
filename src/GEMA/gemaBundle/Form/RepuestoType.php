<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RepuestoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, array(
                    'attr' => array(
                        'placeholder' => 'Capacitor',
                        'pattern' => '.{4,}' //minlength,
                    ),
                    'required' => true
                ))
            ->add('um', null, array(
                    'label' => 'Unidad de Medida',
                    'attr' => array(
                        'placeholder' => 'U'
                    ),
                'required' => false
                ))
            ->add('costoUnitario', null, array(
                    'label' => 'Costo Unitario (pesos)',
                    'attr' => array(
                        'placeholder' => '150.20'
                    ),
                    'required' => true
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Repuesto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gema_gemabundle_repuesto';
    }
}
