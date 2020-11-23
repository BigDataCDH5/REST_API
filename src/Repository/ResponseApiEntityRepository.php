<?php

namespace App\Repository;

use App\Entity\ResponseApiEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResponseApiEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResponseApiEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResponseApiEntity[]    findAll()
 * @method ResponseApiEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponseApiEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResponseApiEntity::class);
    }

    // /**
    //  * @return ResponseApiEntity[] Returns an array of ResponseApiEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResponseApiEntity
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
