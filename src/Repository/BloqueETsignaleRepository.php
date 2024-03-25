<?php

namespace App\Repository;

use App\Entity\BloqueETsignale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BloqueETsignale>
 *
 * @method BloqueETsignale|null find($id, $lockMode = null, $lockVersion = null)
 * @method BloqueETsignale|null findOneBy(array $criteria, array $orderBy = null)
 * @method BloqueETsignale[]    findAll()
 * @method BloqueETsignale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BloqueETsignaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BloqueETsignale::class);
    }

    //    /**
    //     * @return BloqueETsignale[] Returns an array of BloqueETsignale objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?BloqueETsignale
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
