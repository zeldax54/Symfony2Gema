<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoPrioridadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prioridad', null, array(
                'label'=>'Prioridad',
                'required' => true,
                'attr' => array(
                        'pattern' => '.{5,}' //minlength,
                    )
                ))
            ->add('descripcion', null, array(
                'label'=>'Descripción',
                'required' => false,
                'attr' => array(
                        'pattern' => '.{20,}' //minlength,
                    )
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\TipoPrioridad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gema_gemabundle_tipoprioridad';
    }
}
