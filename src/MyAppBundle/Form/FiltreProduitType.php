<?php

namespace MyAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FiltreProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $array_choice=array(
        "1" => "1",
        "2" => "2",
        "3" => "3",
        "4" => "4",
        "5" => "5",
        );  
        
        $builder->add('presentation' ,'choice' ,array('choices' =>$array_choice ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
        
         $builder->add('texture' ,'choice' ,array('choices' =>$array_choice ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
         
       $builder->add('penetration' ,'choice' ,array('choices' =>$array_choice ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
        
       $builder->add('efficacite' ,'choice' ,array('choices' =>$array_choice ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
        
    } 

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_homebundle_filtre_produit';
    }
}
