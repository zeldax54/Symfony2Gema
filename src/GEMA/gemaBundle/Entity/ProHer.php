<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProHer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\ProHerRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class ProHer {

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
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Procedimiento",inversedBy="ProHers", cascade={"persist"}) 
     */
    private $procedimiento;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Herramienta", inversedBy="ProHers",cascade={"persist"}) 
     */
    private $herramienta;

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
     * @return ProHer
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
     * @return ProHer
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
     * @return ProHer
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
     * Set herramienta
     *
     * @param \GEMA\gemaBundle\Entity\Herramienta $herramienta
     * @return ProHer
     */
    public function setHerramienta(\GEMA\gemaBundle\Entity\Herramienta $herramienta = null) {
        $this->herramienta = $herramienta;

        return $this;
    }

    /**
     * Get herramienta
     *
     * @return \GEMA\gemaBundle\Entity\Herramienta 
     */
    public function getHerramienta() {
        return $this->herramienta;
    }

    public function __toString() {
        return $this->getId();
    }

    /**
     * @ORM\PrePersist
     * Give noActivo to the Activo
     */
    public function prePersist() {
        $this->setCosto($this->getCantidad() * $this->getHerramienta()->getCostoUnitario());
        $this->getProcedimiento()->updateCostoTotal();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->prePersist();
    }

}
