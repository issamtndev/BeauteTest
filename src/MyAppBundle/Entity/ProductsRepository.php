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
        
        $query ->leftJoin('p.avis','a');
        $query ->leftJoin('p.category','c');
        
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
        $query->addSelect('COUNT(a.id) as nbavis')
        ->groupBy('p.id')
        ->orderBy("nbavis", 'DESC');
        return $query->getQuery()->getResult();

    }
}
