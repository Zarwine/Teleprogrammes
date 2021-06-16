<?php

namespace App\Repository;

use Doctrine\ORM\EntityManager;
use App\Entity\HoroscopeContent;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method HoroscopeContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method HoroscopeContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method HoroscopeContent[]    findAll()
 * @method HoroscopeContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HoroscopeContentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HoroscopeContent::class);
    }

    // /**
    //  * @return HoroscopeContent[] Returns an array of HoroscopeContent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HoroscopeContent
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getRandom(): array
    {
        $entityManager = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * from horoscope_content ORDER BY RAND() LIMIT 1';
        $stmt = $entityManager->prepare($sql);
        $stmt->execute();

        return $stmt->fetch();
    }
}
