<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MascotaUsuarioRepository")
 */
class MascotaUsuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\usuario")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\mascota")
     */
    private $mascota;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getMascota(): ?mascota
    {
        return $this->mascota;
    }

    public function setMascota(?mascota $mascota): self
    {
        $this->mascota = $mascota;

        return $this;
    }
}
