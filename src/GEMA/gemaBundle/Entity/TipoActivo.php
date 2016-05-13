<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * TipoActivo
 *
 * @ORM\Table()
 * @UniqueEntity("codificador")
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\TipoActivoRepository")
 */
class TipoActivo {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="codificador", type="string", length=5, unique=true)
     */
    private $codificador;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="TipoActivo", type="string", length=255)
     */
    private $tipoActivo;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\Activo" , mappedBy="tipoActivo", cascade={"persist", "remove"}) 
     */
    protected $activos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codificador
     *
     * @param string $codificador
     * @return TipoActivo
     */
    public function setCodificador($codificador) {
        $this->codificador = $codificador;

        return $this;
    }

    /**
     * Get codificador
     *
     * @return string 
     */
    public function getCodificador() {
        return $this->codificador;
    }

    /**
     * Set tipoActivo
     *
     * @param string $tipoActivo
     * @return TipoActivo
     */
    public function setTipoActivo($tipoActivo) {
        $this->tipoActivo = $tipoActivo;

        return $this;
    }

    /**
     * Get tipoActivo
     *
     * @return string 
     */
    public function getTipoActivo() {
        return $this->tipoActivo;
    }

    public function __toString() {
        return $this->getTipoActivo();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activos
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activos
     * @return TipoActivo
     */
    public function addActivo(\GEMA\gemaBundle\Entity\Activo $activos)
    {
        $this->activos[] = $activos;

        return $this;
    }

    /**
     * Remove activos
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activos
     */
    public function removeActivo(\GEMA\gemaBundle\Entity\Activo $activos)
    {
        $this->activos->removeElement($activos);
    }

    /**
     * Get activos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivos()
    {
        return $this->activos;
    }
}
