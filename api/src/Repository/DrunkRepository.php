<?php

namespace App\Repository;

use App\Entity\Drunk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Drunk|null find($id, $lockMode = null, $lockVersion = null)
 * @method Drunk|null findOneBy(array $criteria, array $orderBy = null)
 * @method Drunk[]    findAll()
 * @method Drunk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrunkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Drunk::class);
    }

    public function moy()
    {
        return $this->createQueryBuilder('d')
            ->select('d.quantity')
            ->groupBy('d.quantity')
            ->getQuery()
            ->getArrayResult()
        ;
    }
}
