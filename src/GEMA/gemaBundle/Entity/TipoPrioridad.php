<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPrioridad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\TipoPrioridadRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class TipoPrioridad {

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
     * @ORM\Column(name="prioridad", type="string", length=255)
     */
    private $prioridad;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\PlanMtto" , mappedBy="tipoPrioridad", cascade={"persist", "remove"}) 
     */
    protected $planesMtto;

    /**
     * @ORM\PreRemove
     * Release all the children on remove
     */
    public function preRemove() {
        foreach ($this->planesMtto as $child) {
            $child->setTipoPrioridad(null);
        }
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set prioridad
     *
     * @param string $prioridad
     * @return TipoPrioridad
     */
    public function setPrioridad($prioridad) {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string 
     */
    public function getPrioridad() {
        return $this->prioridad;
    }
    
    /**
     * Set Descripcion
     *
     * @param string $descripcion
     * @return Descripcion
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get Descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function __toString() {
        return $this->getPrioridad();
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->planesMtto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add planesMtto
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planesMtto
     * @return TipoPrioridad
     */
    public function addPlanesMtto(\GEMA\gemaBundle\Entity\PlanMtto $planesMtto) {
        $this->planesMtto[] = $planesMtto;

        return $this;
    }

    /**
     * Remove planesMtto
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planesMtto
     */
    public function removePlanesMtto(\GEMA\gemaBundle\Entity\PlanMtto $planesMtto) {
        $this->planesMtto->removeElement($planesMtto);
    }

    /**
     * Get planesMtto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanesMtto() {
        return $this->planesMtto;
    }

}
