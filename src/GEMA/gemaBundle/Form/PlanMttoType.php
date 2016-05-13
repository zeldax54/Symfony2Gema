<?php

namespace GEMA\gemaBundle\Form;

use GEMA\gemaBundle\Entity\OrdenTrabajo;
use GEMA\gemaBundle\Entity\OrdenTrabajoRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanMttoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', null, array('label'=>'Tarea','required'=>false))

            ->add('ciclo', null, array('label'=>'Ciclo de Ejecución','required'=>false))
                ->add('tipoPrioridad', 'entity', array(
                    'class' => 'gemaBundle:TipoPrioridad',
                    'required' => true,
                    'label' => 'Prioridad'
                )) 
                ->add('fecha', 'date', array(
                    'widget' => 'single_text',
                    'label' => 'Fecha'
                )) 
                ->add('activo', 'entity', array(
                    'class' => 'gemaBundle:Activo',
                    'required' => true,
                    'label' => 'Activo'
                ))

            ->add('ordenesTrabajo', 'entity', array(
                    'class' => 'gemaBundle:OrdenTrabajo',
                    'query_builder' => function(OrdenTrabajoRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->where("c.planMtto is NULL")
                            ->orderBy('c.nombre', 'ASC');
                    },)
            )
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\PlanMtto'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_planmtto';
    }



}
