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
         $array_choice_texture=array_merge ($array_choice,array("0" => "0"));
         $builder->add('texture' ,'choice' ,array('choices' =>$array_choice_texture ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
         
       $builder->add('penetration' ,'choice' ,array('choices' =>$array_choice_texture ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
        
       $builder->add('efficacite_long_terme' ,'choice' ,array('choices' =>$array_choice_texture ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
       
       $builder->add('efficacite_court_terme' ,'choice' ,array('choices' =>$array_choice_texture ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
       
       $builder->add('odeur' ,'choice' ,array('choices' =>$array_choice_texture ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
       
        $builder->add('qualite_prix' ,'choice' ,array('choices' =>$array_choice_texture ,
        'required'  => false,
        'empty_value' => '--',
        'multiple' => false,
        ));
        
        $builder->add('commentaires', 'checkbox', array(
        'label'     => 'commentaires',
        'required'  => false,
        ));
        
        $builder->add('points_forts', 'checkbox', array(
        'label'     => 'points forts',
        'required'  => false,
        ));
        
        $builder->add('points_faibles', 'checkbox', array(
        'label'     => 'points faibles',
        'required'  => false,
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
