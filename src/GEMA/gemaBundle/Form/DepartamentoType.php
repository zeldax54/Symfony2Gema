<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepartamentoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $propertyPathToCity = 'city';
        $builder
            ->add('nombre', null, array(
                'attr' => array(
                    'placeholder' => 'Nombre del Departamento',
                    'pattern' => '.{4,}' //minlength,
                ),
                'required' => true
            ))
            ->add('localizacion', 'entity', array(
                'class' => 'gemaBundle:Localizacion',
                'required' => true,
                'empty_value' => "Seleccione una Localización",
                'label' => 'Localización'

                )
            )

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\Departamento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gema_gemabundle_departamento';
    }
}