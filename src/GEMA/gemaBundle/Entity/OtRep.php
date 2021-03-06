<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OtRep
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\OtRepRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class OtRep {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float")
     */
    private $costo;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Repuesto", cascade={"persist"}) 
     */
    private $repuesto;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Procedimiento",inversedBy="otReps", cascade={"persist"}) 
     */
    private $procedimiento;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return OtRep
     */
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad() {
        return $this->cantidad;
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return OtRep
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
     * Set repuesto
     *
     * @param \GEMA\gemaBundle\Entity\Repuesto $repuesto
     * @return OtRep
     */
    public function setRepuesto(\GEMA\gemaBundle\Entity\Repuesto $repuesto = null) {
        $this->repuesto = $repuesto;

        return $this;
    }

    /**
     * Get repuesto
     *
     * @return \GEMA\gemaBundle\Entity\Repuesto 
     */
    public function getRepuesto() {
        return $this->repuesto;
    }

    /**
     * Set procedimiento
     *
     * @param \GEMA\gemaBundle\Entity\Procedimiento $procedimiento
     * @return OtRep
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

    public function __toString() {
        return $this->getId();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->setCosto($this->getCantidad() * $this->getRepuesto()->getCostoUnitario());
        $this->getProcedimiento()->updateCostoTotal();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->prePersist();
    }

}
