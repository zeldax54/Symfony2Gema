<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProPer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\ProPerRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class ProPer {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="tiempo", type="float")
     */
    private $tiempo;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float")
     */
    private $costo;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Procedimiento",inversedBy="ProPers", cascade={"persist"}) 
     */
    private $procedimiento;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Persona",inversedBy="proPers", cascade={"persist"}) 
     */
    private $persona;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set tiempo
     *
     * @param float $tiempo
     * @return ProPer
     */
    public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return float 
     */
    public function getTiempo() {
        return $this->tiempo;
    }

    public function __toString() {
        return $this->getId();
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return ProPer
     */
    public function setCosto($costo) {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return float 
     */
    public function getCosto() {
        return $this->costo;
    }

    /**
     * Set procedimiento
     *
     * @param \GEMA\gemaBundle\Entity\Procedimiento $procedimiento
     * @return ProPer
     */
    public function setProcedimiento(\GEMA\gemaBundle\Entity\Procedimiento $procedimiento = null) {
        $this->procedimiento = $procedimiento;

        return $this;
    }

    /**
     * Get procedimiento
     *
     * @return \GEMA\gemaBundle\Entity\Procedimiento 
     */
    public function getProcedimiento() {
        return $this->procedimiento;
    }

    /**
     * Set persona
     *
     * @param \GEMA\gemaBundle\Entity\Persona $persona
     * @return ProPer
     */
    public function setPersona(\GEMA\gemaBundle\Entity\Persona $persona = null) {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \GEMA\gemaBundle\Entity\Persona 
     */
    public function getPersona() {
        return $this->persona;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->setCosto($this->getTiempo() * $this->getPersona()->getGastoHora());
        $this->getProcedimiento()->updateCostoTotal();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->prePersist();
    }

}
