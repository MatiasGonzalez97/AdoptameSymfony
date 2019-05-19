<?php

namespace App\Repository;

use App\Entity\MascotaUsuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MascotaUsuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method MascotaUsuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method MascotaUsuario[]    findAll()
 * @method MascotaUsuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MascotaUsuarioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MascotaUsuario::class);
    }

    // /**
    //  * @return MascotaUsuario[] Returns an array of MascotaUsuario objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MascotaUsuario
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
