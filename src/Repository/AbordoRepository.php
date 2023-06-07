<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbordoRepository")
 */
class Abordo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Camarote")
     * @ORM\JoinColumn(name="camarote_id", referencedColumnName="id")
     */
    private $camarote;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Servicio")
     * @ORM\JoinColumn(name="servicio_id", referencedColumnName="id")
     */
    private $servicio;

    /**
     * @ORM\Column(name="fecha_de_solicitud", type="datetime")
     */
    private $fechaDeSolicitud;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCamarote(): ?Camarote
    {
        return $this->camarote;
    }

    public function setCamarote(?Camarote $camarote): self
    {
        $this->camarote = $camarote;

        return $this;
    }

    public function getServicio(): ?Servicio
    {
        return $this->servicio;
    }

    public function setServicio(?Servicio $servicio): self
    {
        $this->servicio = $servicio;

        return $this;
    }

    public function getFechaDeSolicitud(): ?\DateTimeInterface
    {
        return $this->fechaDeSolicitud;
    }

    public function setFechaDeSolicitud(\DateTimeInterface $fechaDeSolicitud): self
    {
        $this->fechaDeSolicitud = $fechaDeSolicitud;

        return $this;
    }
}