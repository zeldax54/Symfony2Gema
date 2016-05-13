<?php

namespace GEMA\gemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProPerType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('persona', null, array(
                    'required' => true,
                    'label' => 'Recurso Humano'
                ))
                ->add('tiempo', null, array(
                    'required' => true,
                    'label' => 'Tiempo'
                ))
//            ->add('procedimiento')

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GEMA\gemaBundle\Entity\ProPer'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gema_gemabundle_proper';
    }

}
