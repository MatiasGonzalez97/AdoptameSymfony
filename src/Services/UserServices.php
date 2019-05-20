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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserServices
{
    private $em;
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function createUser($infor){
        try{
            $decoded = json_decode($infor);
//        dd($decoded->nombre);
            $userRepo = $this->em->getRepository(Usuario::class);
            $exist = $userRepo->findBy([
                'nombre_usuario' =>$decoded->nombre_usuario
            ]);
            if(empty($exist)){
                //Si no existeuna peronsa con ese nombre de usuario lo almacena en la BD
                $this->saveinDB($infor);
                return true;
            }else{
                throw new \Exception('No se ha podido registrar porque ya existe ese nombre de usuario o DNI',404);
            }
        }catch (\Exception $exception){
            return new JsonResponse([
                'code'  =>  $exception->getCode(),
                'message'   => $exception->getMessage()
            ]);
        }
    }

    private function saveinDB($info){
        
        $dataDecoded = json_decode($info);

        $userRepo = new Usuario();
        $userRepo->setNombre($dataDecoded->nombre);
        $userRepo->setApellido($dataDecoded->apellido);
        $userRepo->setEdad($dataDecoded->edad);
        $userRepo->setUbicacion($dataDecoded->ubicacion);
        //queda para hacer elrecibo de archivos
        $userRepo->setImagenDni('null');
        $userRepo->setNombreUsuario($dataDecoded->nombre_usuario);
        $userRepo->setDni($dataDecoded->dni);
        $this->em->persist($userRepo);
        $this->em->flush($userRepo);
    }
}