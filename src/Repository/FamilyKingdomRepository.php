<?php

namespace App\Repository;

use App\Entity\FamilyKingdom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FamilyKingdom|null find($id, $lockMode = null, $lockVersion = null)
 * @method FamilyKingdom|null findOneBy(array $criteria, array $orderBy = null)
 * @method FamilyKingdom[]    findAll()
 * @method FamilyKingdom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamilyKingdomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FamilyKingdom::class);
    }

    // /**
    //  * @return FamilyKingdom[] Returns an array of FamilyKingdom objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FamilyKingdom
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
