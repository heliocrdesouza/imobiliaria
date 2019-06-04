<?php

namespace App\Repository;

use App\Entity\Corretor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Corretor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Corretor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Corretor[]    findAll()
 * @method Corretor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CorretorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Corretor::class);
    }

    // /**
    //  * @return Corretor[] Returns an array of Corretor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Corretor
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
