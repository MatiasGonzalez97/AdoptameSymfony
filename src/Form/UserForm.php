<?php
/**
 * Created by PhpStorm.
 * User: matia
 * Date: 19/5/2019
 * Time: 01:26
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')
                ->add('apellido')
                ->add('nombre_usuario')
                ->add('edad')
                ->add('apellido')
            ->add('dni')
            ->add('ubicacion');
    }

}