<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProcedimientoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('codigo', null, array(
                    'label' => 'Código',
                    'attr' => array(
                        'placeholder' => '[P 15967-3]'
                    ),
                    'required' => true
                ))
                ->add('nombre', null, array(
                    'required' => true,
                    'label' => 'Nombre',
                    'attr' => array(
                        'placeholder' => 'Sustituir del sello mecánico',
                        'pattern' => '.{4,}' //minlength,
                    ),
                ))
                ->add('organizacionProductiva', null, array(
                    'required' => false,
                    'label' => 'Organización Productiva',
                    'attr' => array(
                        'placeholder' => '',
                        'pattern' => '.{4,}' //minlength,
                    ),
                ))
                ->add('tiempoTotal', null, array(
                    'required' => false,
                    'label' => 'Tiempo Total(min)',
                    'attr' => array(
                        'placeholder' => ''
                    ),
                ))
                ->add('acciones')
                ->add('otReps', 'collection', array('type' => new OtRepType(), "by_reference" => FALSE, 'allow_add' => true, 'allow_delete' => true,"label"=>" "))
                ->add('ProIns', 'collection', array('type' => new ProInsType(), "by_reference" => FALSE, 'allow_add' => true, 'allow_delete' => true,"label"=>" "))
                ->add('ProHers', 'collection', array('type' => new ProHerType(), "by_reference" => FALSE, 'allow_add' => true, 'allow_delete' => true,"label"=>" "))
                ->add('ProPers', 'collection', array('type' => new ProPerType(), "by_reference" => FALSE, 'allow_add' => true, 'allow_delete' => true,"label"=>" "));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Procedimiento'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_procedimiento';
    }

}
