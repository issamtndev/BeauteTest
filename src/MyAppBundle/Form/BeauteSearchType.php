<?php

namespace MyAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class BeauteSearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder->add('categorie', 'entity', array(
            'class' => 'MyAppBundle:Categories',
            'query_builder' => function(EntityRepository $er) {
                                        return $er->createQueryBuilder('c')
                                                ->where("c.parentId = :idparent")
                                                ->setParameter('idparent', "0");
                                    },
            'choice_label' => 'name',
            'required'  => false,
            'empty_value' => 'Choisir la catégorie',
            'multiple' => false)
        );
       
        $builder->add('sub_categorie', 'entity', array(
            'class' => 'MyAppBundle:Categories',
            'choice_label' => 'name',
            'empty_value' => 'Choisir la sous catégorie', 
            'required'  => false,            
            'multiple' => false)
        );
        
        $builder->add('marque', 'text',array('required'  => false));
        
        $builder->add('product_name', 'text',array('required'  => false));
        
        
    } 

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_homebundle_beaute_search';
    }
}
