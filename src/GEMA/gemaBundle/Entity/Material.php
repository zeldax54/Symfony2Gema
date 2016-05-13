<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\MaterialRepository")
 */
class Material {

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
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="costoUnitario", type="float")
     */
    private $costoUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="um", type="string", length=5)
     */
    private $um;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Material
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set costoUnitario
     *
     * @param float $costoUnitario
     * @return Material
     */
    public function setCostoUnitario($costoUnitario) {
        $this->costoUnitario = $costoUnitario;

        return $this;
    }

    /**
     * Get costoUnitario
     *
     * @return float 
     */
    public function getCostoUnitario() {
        return $this->costoUnitario;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return Material
     */
    public function setUm($um) {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm() {
        return $this->um;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
