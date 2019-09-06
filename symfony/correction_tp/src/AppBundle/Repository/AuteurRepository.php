<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Auteur;

/**
 * AuteurRepository
 */
class AuteurRepository extends EntityRepository
{
    public function findAllOrderedByNameAsc()
    {
        //SELECT nom FROM Auteur a ORDER BY a.nom ASC
//$qb =$this->createQueryBuilder('a')
//    ->orderBy('a.nom', 'ASC')
//    ->getQuery();
//var_dump($qb);die;

        return $this->createQueryBuilder('a')
            ->orderBy('a.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
