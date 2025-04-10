<?php

namespace App\Entity;

use App\Repository\EquipoFutbolRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipoFutbolRepository::class)]
class EquipoFutbol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(length: 100)]
    private ?string $ciudad = null;

    #[ORM\Column(length: 100)]
    private ?string $pais = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fundacion = null;

    #[ORM\Column(length: 100)]
    private ?string $estadio = null;

    #[ORM\Column(length: 100)]
    private ?string $presidente = null;

    #[ORM\Column(length: 100)]
    private ?string $colores = null;

    #[ORM\Column(length: 100)]
    private ?string $liga = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    private ?string $presupuesto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): static
    {
        $this->pais = $pais;

        return $this;
    }

    public function getFundacion(): ?\DateTimeInterface
    {
        return $this->fundacion;
    }

    public function setFundacion(\DateTimeInterface $fundacion): static
    {
        $this->fundacion = $fundacion;

        return $this;
    }

    public function getEstadio(): ?string
    {
        return $this->estadio;
    }

    public function setEstadio(string $estadio): static
    {
        $this->estadio = $estadio;

        return $this;
    }

    public function getPresidente(): ?string
    {
        return $this->presidente;
    }

    public function setPresidente(string $presidente): static
    {
        $this->presidente = $presidente;

        return $this;
    }

    public function getColores(): ?string
    {
        return $this->colores;
    }

    public function setColores(string $colores): static
    {
        $this->colores = $colores;

        return $this;
    }

    public function getLiga(): ?string
    {
        return $this->liga;
    }

    public function setLiga(string $liga): static
    {
        $this->liga = $liga;

        return $this;
    }

    public function getPresupuesto(): ?string
    {
        return $this->presupuesto;
    }

    public function setPresupuesto(string $presupuesto): static
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }
}
