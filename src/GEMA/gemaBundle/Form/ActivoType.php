<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActivoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('factura', 'entity', array(
                    'class' => 'gemaBundle:Factura',
                    'required' => true
                ))
                ->add('tipoActivo', 'entity', array(
                    'class' => 'gemaBundle:TipoActivo',
                    'required' => true,
                    'empty_value' => "Seleccione un Tipo de Activo",
                    'label' => 'Tipo de Activo'
                ))
                ->add('nombre')

            ->add('centroCosto',null, array(
                'label' => 'Centro de Costo',
                'invalid_message' => '','required'=>true
            ))

                ->add('noInventario', null, array(
                    'label' => 'No. de Inventario',
                    'invalid_message' => 'Este número ya está asignado a otro activo.',
                    'extra_fields_message'=> 'extra fiel message gema'
                    ))
                ->add('area', 'entity', array(
                    'class' => 'gemaBundle:Area',
                    'required' => true,
                    'empty_value' => "Seleccione un Área",
                    'label' => 'Área'
                ))
                ->add('marca')
                ->add('modelo')
                ->add('fechaInstalacion','date',  array(
                    'label' => 'Instalación',
                    'widget' => 'single_text'
                    ))
                ->add('fechaPuestaMarcha','date',  array(
                    'label' => 'Puesta en Marcha',
                    'widget' => 'single_text'
                    ))
                ->add('fechaDepreciacion','date', array(
                    'label' => 'Depreciación',
                    'widget' => 'single_text'
                    ))
                ->add('cicloMtto', 'integer',  array('label' => 'Ciclo de Mantenimiento (días)'))
                ->add('notas', 'textarea', array(
                    'required' => false
                ))
                ->add('estOps', 'collection', array(
                    'type' => new EstOpType(), 
                    "by_reference" => FALSE, 
                    'allow_add' => true, 
                    'allow_delete' => true))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Activo'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_activo';
    }

}
