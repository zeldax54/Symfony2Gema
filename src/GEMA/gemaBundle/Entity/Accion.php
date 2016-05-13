<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\AccionRepository")
 */
class Accion {

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
     * @var integer
     *
     * @ORM\Column(name="tiempo", type="integer")
     */
    private $tiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimiento", type="string", length=255, nullable=true)
     */
    private $procedimiento;

    /**
     * @ORM\ManyToMany(targetEntity="Procedimiento", cascade={"persist"}, mappedBy="acciones") 
     */
    private $procs;

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
     * @return Accion
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
     * Set tiempo
     *
     * @param integer $tiempo
     * @return Accion
     */
    public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return integer 
     */
    public function getTiempo() {
        return $this->tiempo;
    }

    /**
     * Set procedimiento
     *
     * @param string $procedimiento
     * @return Accion
     */
    public function setProcedimiento($procedimiento) {
        $this->procedimiento = $procedimiento;

        return $this;
    }

    /**
     * Get procedimiento
     *
     * @return string 
     */
    public function getProcedimiento() {
        return $this->procedimiento;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->procs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add procs
     *
     * @param \GEMA\gemaBundle\Entity\Procedimiento $procs
     * @return Procedimiento
     */
    public function addProc(\GEMA\gemaBundle\Entity\Procedimiento $procs) {

        if (!$this->procs->contains($procs)) {
            $this->procs->add($procs);
        }

        return $this;
    }

    /**
     * Remove procs
     *
     * @param \GEMA\gemaBundle\Entity\Procedimiento $procs
     */
    public function removeProc(\GEMA\gemaBundle\Entity\Procedimiento $procs) {
        $this->procs->removeElement($procs);
    }

    /**
     * Get procs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcs() {
        return $this->procs;
    }

    public function __toString() {
        return $this->nombre;
    }

}
