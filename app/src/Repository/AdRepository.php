<?php
/**
 * AdRepository.
 */

namespace App\Repository;

use App\Entity\Ad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ad>
 */
class AdRepository extends ServiceEntityRepository
{
    /**
     * Constructor.
     *
     * @param ManagerRegistry $registry Manager Registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ad::class);
    }

    /**
     * Function Query All.
     *
     * @return QueryBuilder Query Builder
     */
    public function queryAll(): QueryBuilder
    {
        $queryBuilder = $this->getOrCreateQueryBuilder()
            ->orderBy('ad.createdAt', 'DESC');

        return $this->$queryBuilder;
    }

    /**
     * Save Entity.
     *
     * @param Ad $ad Ad Entity
     *
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function save(Ad $ad): void
    {
        assert($this->_em instanceof EntityManager);
        $this->_em->persist($ad);
        $this->_em->flush();
    }

    /**
     * Delete Entity.
     *
     * @param Ad $ad Ad Entity
     *
     * @throws ORMException
     */
    public function delete(Ad $ad): void
    {
        assert($this->_em instanceof EntityManager);
        $this->_em->remove($ad);
        $this->_em > flush();
    }

    /**
     * Get or create new query builder.
     *
     * @param QueryBuilder|null $queryBuilder Query Builder
     *
     * @return QueryBuilder Query Builder
     */
    private function getOrCreateQueryBuilder(?QueryBuilder $queryBuilder = null): QueryBuilder
    {
        return $queryBuilder ?? $this->createQueryBuilder('ad');
    }

    //    /**
    //     * @return Ad[] Returns an array of Ad objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Ad
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
