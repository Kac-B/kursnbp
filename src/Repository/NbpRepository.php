<?php

namespace App\Repository;

use App\Entity\Nbp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nbp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nbp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nbp[]    findAll()
 * @method Nbp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NbpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nbp::class);
    }

    public function create(array $data)
    {
        $kurs = new Nbp();
        $kurs->setNumerTabeli($data['nazwa_tabeli']);
        $kurs->setDataPublikacji($data_publikacji);
        $kurs->setNazwaWaluty($nazwa_waluty);
        $kurs->setPrzelicznik($przelicznik);
        $kurs->setKodWaluty($kod_waluty);
        $kurs->setKursSredni($kurs_sredni);

        $this->_em->persist($kurs);
        $this->_em->flush();
    }

    // /**
    //  * @return Nbp[] Returns an array of Nbp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nbp
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}