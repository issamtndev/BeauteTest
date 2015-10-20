<?php

namespace MyAppBundle\Entity;

/**
 * CategoriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoriesRepository extends \Doctrine\ORM\EntityRepository
{
     public function find_name_and_nbr_eavis($id_category)
    {
        $query = $this->createQueryBuilder('c');
        
        $query ->leftJoin('c.products','p');
        $query->addSelect('COUNT(a.id) as nbavis');
        $query->leftJoin('p.avis','a')       
              ->groupBy('c.products')
              ->orderBy("nbavis", 'DESC');
        $query->andWhere('c.id = :id')
              ->setParameter('id', $id_category);
        $query->orWhere('c.parentId = :categorie')
              ->setParameter('categorie', $id_category);
          /*Afficher la requete sql*/
       // $q=$query->getQuery();
        //echo "---->".$q->getSQL();
        return $query->getQuery()->getResult();
         
     }
}
