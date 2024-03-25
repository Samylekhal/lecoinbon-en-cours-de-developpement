<?php

namespace App\Repository;

use App\Entity\ListesArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListesArticles>
 *
 * @method ListesArticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListesArticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListesArticles[]    findAll()
 * @method ListesArticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListesArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListesArticles::class);
    }

    //    /**
    //     * @return ListesArticles[] Returns an array of ListesArticles objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ListesArticles
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
