<?php

namespace App\Controller;

use App\Form\UserForm;
use App\Services\UserServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/create", name="user")
     */
    public function new(Request $request, UserServices $services)
    {
        $form = $this->createForm(UserForm::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $services->createUser($form->getData());
            dd($form->getData());
        }

        return $this->render('user/index.html.twig',[
            'userForm'  => $form->createView()
        ]);
    }
}
