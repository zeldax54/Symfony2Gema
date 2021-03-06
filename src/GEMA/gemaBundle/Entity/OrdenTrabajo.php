<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenTrabajo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\OrdenTrabajoRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class OrdenTrabajo {//TO-DO AGREGAR FECHA TERMINACION

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="PlanMtto", inversedBy="ordenesTrabajo", cascade={"persist"})
     * @ORM\JoinColumn(name="planmtto", referencedColumnName="id")
     */
    private $planMtto;

    /**
     * @ORM\ManyToMany(targetEntity="Procedimiento", inversedBy="ordenTrabajos", cascade={"persist"}) 
     */
    private $procedimientos;

    /**
     * @var float
     *
     * @ORM\Column(name="costoTotal", type="float")
     */
    private $costoTotal;
    
    /**
     * @var float
     *
     * @ORM\Column(name="tiempoTotal", type="float")
     */
    private $tiempoTotal;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="cumplida", type="boolean",nullable=true)
     */
    private $cumplida = false;
    
    
    

    public function __toString() {
        return $this->getNombre()." ";
    }

    /**
     * Set planMtto
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planMtto
     * @return OrdenTrabajo
     */
    public function setPlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMtto = null) {
        $this->planMtto = $planMtto;

        return $this;
    }

    /**
     * Get planMtto
     * @return \GEMA\gemaBundle\Entity\PlanMtto 
     */
    public function getPlanMtto() {
        return $this->planMtto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return OrdenTrabajo
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
     * Constructor
     */
    public function __construct() {
        $this->procedimientos = new \Doctrine\Common\Collections\ArrayCollection();
    }

   

    /**
     * @ORM\PrePersist
     * Give noActivo to the Activo
     */
    public function prePersist() {
        $this->updateCostos();
    }

    public function updateCostos() {
        $this->setCostoTotal(0);
        $this->setTiempoTotal(0);
        foreach ($this->getProcedimientos() as $procedimiento) {
            $this->setCostoTotal($this->getCostoTotal() + $procedimiento->getCostoTotal());
            $this->setTiempoTotal($this->getTiempoTotal() + $procedimiento->getTiempoTotal());
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updateCostos();
    }

    /**
     * Set costoTotal
     *
     * @param float $costoTotal
     * @return OrdenTrabajo
     */
    public function setCostoTotal($costoTotal) {
        $this->costoTotal = $costoTotal;

        return $this;
    }

    /**
     * Get costoTotal
     *
     * @return float 
     */
    public function getCostoTotal() {
        return $this->costoTotal;
    }


    /**
     * Add procedimientos
     *
     * @param \GEMA\gemaBundle\Entity\Procedimiento $procedimientos
     * @return OrdenTrabajo
     */
    public function addProcedimiento(\GEMA\gemaBundle\Entity\Procedimiento $procedimientos)
    {

        $this->procedimientos[] = $procedimientos;
        $procedimientos->addOrdenTrabajo($this);
        return $this;
    }



    /**
     * Remove procedimientos
     *
     * @param \GEMA\gemaBundle\Entity\Procedimiento $procedimientos
     */
    public function removeProcedimiento(\GEMA\gemaBundle\Entity\Procedimiento $procedimientos)
    {
        $this->procedimientos->removeElement($procedimientos);
    }

    /**
     * Get procedimientos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcedimientos()
    {
        return $this->procedimientos;
    }

    /**
     * Set tiempoTotal
     *
     * @param float $tiempoTotal
     * @return OrdenTrabajo
     */
    public function setTiempoTotal($tiempoTotal)
    {
        $this->tiempoTotal = $tiempoTotal;

        return $this;
    }

    /**
     * Get tiempoTotal
     *
     * @return float 
     */
    public function getTiempoTotal()
    {
        return $this->tiempoTotal;
    }

    /**
     * Set cumplida
     *
     * @param boolean $cumplida
     * @return OrdenTrabajo
     */
    public function setCumplida($cumplida)
    {
        $this->cumplida = $cumplida;

        return $this;
    }

    /**
     * Get cumplida
     *
     * @return boolean 
     */
    public function getCumplida()
    {
        return $this->cumplida;
    }

    /**
     * Remove planMtto
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planMtto
     */
    public function removePlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMtto)
    {
        $this->planMtto->removeElement($planMtto);
    }
}
