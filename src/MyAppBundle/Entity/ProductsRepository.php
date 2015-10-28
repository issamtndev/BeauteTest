<?php

namespace MyAppBundle\Entity;

/**
 * ProductsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductsRepository extends \Doctrine\ORM\EntityRepository
{
     public function findProductsByParametres($data)

    {

        $query = $this->createQueryBuilder('p');
        
        $query->addSelect('COUNT(a.id) as nbavis');
        $query->leftJoin('p.avis','a')       
              ->groupBy('p.id')
              ->orderBy("nbavis", 'DESC');
        $query ->leftJoin('p.category','c');
        
        if(isset($data['marque']))if($data['marque'] != '')
        {
                    $marque_request=explode(',',$data['marque']);
                    $i=0;
                    foreach($marque_request as $unemarque) 
                    {  $i++;;
                        $query->orWhere('p.marque like :m_'.$i)
                             ->setParameter('m_'.$i, "%".$unemarque."%");
                    }
        }
        if($data['sub_categorie'] != '')
        { 
            $query->andWhere('p.category = :categorie')

                   ->setParameter('categorie', $data['sub_categorie']);

        }
        elseif($data['categorie'] != '')
        {
            $query->andWhere('c.parentId = :categorie')

                ->setParameter('categorie', $data['categorie']);
             
            $query->orWhere('p.category = :categorie')

                ->setParameter('categorie', $data['categorie']);
        }
         if($data['product_name'] != '')
        {
                    $query->andWhere('p.name Like :name_search')

                ->setParameter('name_search', "%".$data['product_name']."%");

        } 
        if(isset($data['efficacite_court_terme']))if($data['efficacite_court_terme'] != '')
        {
                    $query->andWhere('a.efficaciteCourtTerme = :eff_c_t')
                          ->setParameter('eff_c_t', $data['efficacite_court_terme']);
        }
        if(isset($data['efficacite_long_terme']))if($data['efficacite_long_terme'] != '')
        {
                    $query->andWhere('a.efficaciteLongTerme = :eff_l_t')
                          ->setParameter('eff_l_t', $data['efficacite_long_terme']);
        }
        if(isset($data['odeur']))if($data['odeur'] != '')
        {
                    $query->andWhere('a.odeur = :odeur')
                          ->setParameter('odeur', $data['odeur']);
        }
        if(isset($data['penetration']))if($data['penetration'] != '')
        {
                    $query->andWhere('a.penetration = :penetration')
                          ->setParameter('penetration', $data['penetration']);
        }
        
        if(isset($data['presentation']))if($data['presentation'] != '')
        {
                    $query->andWhere('a.presentation = :presentation')
                          ->setParameter('presentation', $data['presentation']);
        }
        if(isset($data['qualite_prix']))if($data['qualite_prix'] != '')
        {
                    $query->andWhere('a.qualitePrix = :qualite_prix')
                          ->setParameter('qualite_prix', $data['qualite_prix']);
        }
        if(isset($data['texture']))if($data['texture'] != '')
        {
                    $query->andWhere('a.texture = :texture')
                          ->setParameter('texture', $data['texture']);
        }
        
        if(isset($data['commentaires'])&& ($data['commentaires'] == 1))
        {
                    $query->andWhere('a.comments != :commentaires')
                          ->setParameter('commentaires', '-');
        }
        if(isset($data['prix_min'])&&isset($data['prix_max'])&&(($data['prix_min']!="")&&($data['prix_max']))){
             $query->andWhere('p.prix BETWEEN :prixMin AND :prixMax')
                 ->setParameter('prixMin',$data['prix_min'])
                ->setParameter('prixMax',$data['prix_max']);
        }
        
        if(isset($data['date_a'])&&isset($data['date_b'])&&(($data['date_a']!="")&&($data['date_b']))){
             $query->andWhere('a.date >= :date_de')
                 ->setParameter('date_de',$data['date_a']);
             $query->andWhere('a.date <= :date_a')
                 ->setParameter('date_a',$data['date_b']);     
         }
        
        return $query->getQuery()->getResult();

    }
    
    public function findProductsByParametresQuery($data)

    {

        $query = $this->createQueryBuilder('p');
        
        $query->leftJoin('p.avis','a');
        $query ->leftJoin('p.category','c');
        
        if(isset($data['marque']))if($data['marque'] != '')
        {
                    $marque_request=explode(',',$data['marque']);
                    $i=0;
                    foreach($marque_request as $unemarque) 
                    {  $i++;
                        $query->orWhere('p.marque like :m_'.$i)
                              ->setParameter('m_'.$i, $unemarque);
                    }
        }
        
        if($data['sub_categorie'] != '')
        { 
            $query->andWhere('p.category = :categorie')

                   ->setParameter('categorie', $data['sub_categorie']);

        }
        elseif($data['categorie'] != '')
        {
            $query->andWhere('c.parentId = :categorie')

                ->setParameter('categorie', $data['categorie']);
             
            $query->orWhere('p.category = :categorie')

                ->setParameter('categorie', $data['categorie']);
        }
         if($data['product_name'] != '')
        {
                    $query->andWhere('p.name Like :name_search')

                ->setParameter('name_search', "%".$data['product_name']."%");

        } 
        if(isset($data['efficacite_court_terme']))if($data['efficacite_court_terme'] != '')
        {
                    $query->andWhere('a.efficaciteCourtTerme = :eff_c_t')
                          ->setParameter('eff_c_t', $data['efficacite_court_terme']);
        }
        if(isset($data['efficacite_long_terme']))if($data['efficacite_long_terme'] != '')
        {
                    $query->andWhere('a.efficaciteLongTerme = :eff_l_t')
                          ->setParameter('eff_l_t', $data['efficacite_long_terme']);
        }
        if(isset($data['odeur']))if($data['odeur'] != '')
        {
                    $query->andWhere('a.odeur = :odeur')
                          ->setParameter('odeur', $data['odeur']);
        }
        if(isset($data['penetration']))if($data['penetration'] != '')
        {
                    $query->andWhere('a.penetration = :penetration')
                          ->setParameter('penetration', $data['penetration']);
        }
        
        if(isset($data['presentation']))if($data['presentation'] != '')
        {
                    $query->andWhere('a.presentation = :presentation')
                          ->setParameter('presentation', $data['presentation']);
        }
        if(isset($data['qualite_prix']))if($data['qualite_prix'] != '')
        {
                    $query->andWhere('a.qualitePrix = :qualite_prix')
                          ->setParameter('qualite_prix', $data['qualite_prix']);
        }
        if(isset($data['texture']))if($data['texture'] != '')
        {
                    $query->andWhere('a.texture = :texture')
                          ->setParameter('texture', $data['texture']);
        }
       
        if(isset($data['commentaires'])&& ($data['commentaires'] == 1))
        {
                    $query->andWhere('a.comments != :commentaires')
                          ->setParameter('commentaires', '-');
        }
        if(isset($data['prix_min'])&&isset($data['prix_max'])&&(($data['prix_min']!="")&&($data['prix_max']))){
             $query->andWhere('p.prix BETWEEN :prixMin AND :prixMax')
                 ->setParameter('prixMin',$data['prix_min'])
                ->setParameter('prixMax',$data['prix_max']);
        }
        
        if(isset($data['date_a'])&&isset($data['date_b'])&&(($data['date_a']!="")&&($data['date_b']))){
             $query->andWhere('a.date >= :date_de')
                 ->setParameter('date_de',$data['date_a']);
             $query->andWhere('a.date <= :date_a')
                 ->setParameter('date_a',$data['date_b']);     
         }
        
        return $query->getQuery();

    }
}
