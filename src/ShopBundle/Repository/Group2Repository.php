<?php

namespace ShopBundle\Repository;

/**
 * Group2Repository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Group2Repository extends \Doctrine\ORM\EntityRepository
{
    public function getBy($parent) {
        $qb = $this->createQueryBuilder('g2')
            ->select('g2.itemgroup2')
            ->where('g2.parent = :parent')
            ->setParameter('parent', $parent)
        ;

        return $qb->getQuery()->getResult();

    }
}
