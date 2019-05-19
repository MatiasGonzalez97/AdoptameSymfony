<?php
/**
 * Created by PhpStorm.
 * User: matia
 * Date: 19/5/2019
 * Time: 01:12
 */

namespace App\Services;


use App\Entity\Usuario;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class UserServices
{
    private $em;
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function createUser($infor){
        dd($infor);
        $userRepo = $this->em->getRepository(Usuario::class);
        $userRepo->findBy($infor);
        dump($data);die;
    }
}