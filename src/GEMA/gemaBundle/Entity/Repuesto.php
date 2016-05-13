<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repuesto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\RepuestoRepository")
 */
class Repuesto {

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
     * @var string
     *
     * @ORM\Column(name="um", type="string", length=3, nullable=true)
     */
    private $um;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_unitario", type="float")
     */
    private $costoUnitario;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\OtRep" , mappedBy="repuesto", cascade={"persist"}) 
     */
    private $otReps;

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
     * @return Repuesto
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
     * Set um
     *
     * @param string $um
     * @return Repuesto
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

    /**
     * Set costoUnitario
     *
     * @param float $costoUnitario
     * @return Repuesto
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
     * Constructor
     */
    public function __construct() {
        $this->otReps = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add otReps
     *
     * @param \GEMA\gemaBundle\Entity\OtRep $otReps
     * @return Repuesto
     */
    public function addOtRep(\GEMA\gemaBundle\Entity\OtRep $otReps) {
        $this->otReps[] = $otReps;

        return $this;
    }

    /**
     * Remove otReps
     *
     * @param \GEMA\gemaBundle\Entity\OtRep $otReps
     */
    public function removeOtRep(\GEMA\gemaBundle\Entity\OtRep $otReps) {
        $this->otReps->removeElement($otReps);
    }

    /**
     * Get otReps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOtReps() {
        return $this->otReps;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
