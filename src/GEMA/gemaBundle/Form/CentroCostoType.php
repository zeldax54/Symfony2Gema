<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CentroCostoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
//            ->add('area')
//            ->add('departamento')
            ->add('area', 'entity', array('required'   => true,'class'=>'gemaBundle:Area'
            , 'empty_value'=> '== Seleccione un Área =='))
            ->add('departamento', 'entity', array('required'   => true,'class'=>'gemaBundle:Departamento'
            , 'empty_value'=> '== No hay Departamentos para esta Área=='))

//            ->add('departamento', 'shtumi_dependent_filtered_entity'
//                , array('entity_alias' => 'departamento_by_area'
//                , 'empty_value'=> '== Choose region =='
//                , 'parent_field'=>'area'))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\CentroCosto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gema_gemabundle_centrocosto';
    }
}
