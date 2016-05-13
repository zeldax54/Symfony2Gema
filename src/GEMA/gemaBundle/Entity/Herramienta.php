<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Herramienta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\HerramientaRepository")
 */
class Herramienta {

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
     * @ORM\Column(name="costo_unitario", type="float")
     */
    private $costoUnitario;

    /**
     * @var float
     *
     * @ORM\Column(name="depreciacion_diaria", type="float")
     */
    private $depreciacionDiaria;

    /**
     * @var float
     *
     * @ORM\Column(name="norma", type="float")
     */
    private $norma;

 /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\ProHer" , mappedBy="herramienta", cascade={"persist"}) 
     */
    private $ProHers;
    

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
     * @return Herramienta
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
     * @return Herramienta
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
     * Set depreciacionDiaria
     *
     * @param float $depreciacionDiaria
     * @return Herramienta
     */
    public function setDepreciacionDiaria($depreciacionDiaria) {
        $this->depreciacionDiaria = $depreciacionDiaria;

        return $this;
    }

    /**
     * Get depreciacionDiaria
     *
     * @return float 
     */
    public function getDepreciacionDiaria() {
        return $this->depreciacionDiaria;
    }

    /**
     * Set norma
     *
     * @param float $norma
     * @return Herramienta
     */
    public function setNorma($norma) {
        $this->norma = $norma;

        return $this;
    }

    /**
     * Get norma
     *
     * @return float 
     */
    public function getNorma() {
        return $this->norma;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->ProHers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ProHers
     *
     * @param \GEMA\gemaBundle\Entity\ProHer $proHers
     * @return Herramienta
     */
    public function addProHer(\GEMA\gemaBundle\Entity\ProHer $proHers) {
        $this->ProHers[] = $proHers;

        return $this;
    }

    /**
     * Remove ProHers
     *
     * @param \GEMA\gemaBundle\Entity\ProHer $proHers
     */
    public function removeProHer(\GEMA\gemaBundle\Entity\ProHer $proHers) {
        $this->ProHers->removeElement($proHers);
    }

    /**
     * Get ProHers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProHers() {
        return $this->ProHers;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
