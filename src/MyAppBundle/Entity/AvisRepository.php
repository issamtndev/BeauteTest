<?php

namespace MyAppBundle\Entity;

/**
 * AvisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AvisRepository extends \Doctrine\ORM\EntityRepository
{
    public function findavisByParametres($data)

    {

        $query = $this->createQueryBuilder('a');
        
        $query ->leftJoin('a.product','p');
        $query ->leftJoin('p.category','c');
                
        if($data['sub_categorie'] != '')
        {
            $query->andWhere('p.category = :categorie')

                   ->setParameter('categorie', $data['sub_categorie']);

        }
        elseif($data['categorie'] != '')

        {
            $query->andWhere('p.category = :categorie')

                ->setParameter('categorie', $data['categorie']);
             
            $query->orWhere('c.parentId = :categorie_parent')

                ->setParameter('categorie_parent', $data['categorie']);
        }
         if($data['product_name'] != '')
        {
                    $query->andWhere('p.name Like :name_search')

                ->setParameter('name_search', "%".$data['product_name']."%");

        }  

        return $query->getQuery()->getResult();

    }
}
