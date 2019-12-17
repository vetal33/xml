<?php

namespace App\Repository;

use App\Entity\ExchangeFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ExchangeFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExchangeFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExchangeFile[]    findAll()
 * @method ExchangeFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExchangeFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExchangeFile::class);
    }

    // /**
    //  * @return ExchangeFile[] Returns an array of ExchangeFile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExchangeFile
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
