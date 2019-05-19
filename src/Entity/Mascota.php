<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MascotaRepository")
 */
class Mascota
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $edad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo_mascota;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vacunas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $operado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEdad(): ?string
    {
        return $this->edad;
    }

    public function setEdad(string $edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    public function getTipoMascota(): ?string
    {
        return $this->tipo_mascota;
    }

    public function setTipoMascota(string $tipo_mascota): self
    {
        $this->tipo_mascota = $tipo_mascota;

        return $this;
    }

    public function getVacunas(): ?string
    {
        return $this->vacunas;
    }

    public function setVacunas(string $vacunas): self
    {
        $this->vacunas = $vacunas;

        return $this;
    }

    public function getOperado(): ?string
    {
        return $this->operado;
    }

    public function setOperado(string $operado): self
    {
        $this->operado = $operado;

        return $this;
    }
}
