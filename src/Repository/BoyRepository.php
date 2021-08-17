<?php

namespace App\Repository;

use App\Entity\Boy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Boy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Boy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Boy[]    findAll()
 * @method Boy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Boy::class);
    }

    // /**
    //  * @return Boy[] Returns an array of Boy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Boy
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
