<?php

namespace Tools\Bundle\NamegeneratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WordType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('term')
            ->add('description')
            ->add('gender')
            ->add('species', 'entity', array(
                'class' => 'Common\Bundle\EntitiesBundle\Entity\Species',
                'property' => 'name',
                'preferred_choices' => array('1'),
                'multiple' => true,
                'expanded' => true
              ))            
            ->add('type', 'entity', array(
                'class' => 'Tools\Bundle\NamegeneratorBundle\Entity\Wordtype',
                'property' => 'name',
                'multiple' => true,
                'expanded' => true
              ))          ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tools\Bundle\NamegeneratorBundle\Entity\Word'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tools_bundle_namegeneratorbundle_word';
    }


}
