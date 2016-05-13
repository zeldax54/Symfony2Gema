<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProIns
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\ProInsRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class ProIns {

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
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Procedimiento",inversedBy="ProIns", cascade={"persist"}) 
     */
    private $procedimiento;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Insumo", cascade={"persist"}) 
     */
    private $insumo;

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
     * @return ProIns
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
     * @return ProIns
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
     * @return ProIns
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
     * Set insumo
     *
     * @param \GEMA\gemaBundle\Entity\Insumo $insumo
     * @return ProIns
     */
    public function setInsumo(\GEMA\gemaBundle\Entity\Insumo $insumo = null) {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return \GEMA\gemaBundle\Entity\Insumo 
     */
    public function getInsumo() {
        return $this->insumo;
    }

    public function __toString() {
        return $this->getId();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->setCosto($this->getCantidad() * $this->getInsumo()->getCostoUnitario());
        $this->getProcedimiento()->updateCostoTotal();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->prePersist();
    }

}
