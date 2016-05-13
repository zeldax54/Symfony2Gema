<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActividadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('actividad')
            ->add('tipoActividad', 'entity', array(
                    'class' => 'gemaBundle:TipoActividad',
                    'required' => true,
                    'empty_value' => "Seleccione un Tipo de Actividad"
                ))
            ->add('planMtto', 'entity', array(
                    'class' => 'gemaBundle:PlanMtto',
                    'required' => true,
                    'empty_value' => "Seleccione un Plan"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Actividad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gema_gemabundle_actividad';
    }
}
