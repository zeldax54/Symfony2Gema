<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\ActividadRepository")
 */
class Actividad {

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
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\TipoActividad",inversedBy="actividades", cascade={"persist"}) 
     */
    private $tipoActividad;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\PlanMtto",inversedBy="actividades", cascade={"persist"}) 
     */
    private $planMtto;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text")
     */
    private $actividad;

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return Actividad
     */
    public function setActividad($actividad) {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad() {
        return $this->actividad;
    }

    /**
     * Set plan
     *
     * @param \GEMA\gemaBundle\Entity\TipoActividad $plan
     * @return Actividad
     */
    public function setPlan(\GEMA\gemaBundle\Entity\TipoActividad $plan = null) {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return \GEMA\gemaBundle\Entity\PlanMtto 
     */
    public function getPlan() {
        return $this->planMtto;
    }

    public function __toString() {
        return $this->actividad;
    }


    /**
     * Set tipoActividad
     *
     * @param \GEMA\gemaBundle\Entity\TipoActividad $tipoActividad
     * @return Actividad
     */
    public function setTipoActividad(\GEMA\gemaBundle\Entity\TipoActividad $tipoActividad = null)
    {
        $this->tipoActividad = $tipoActividad;

        return $this;
    }

    /**
     * Get tipoActividad
     *
     * @return \GEMA\gemaBundle\Entity\TipoActividad 
     */
    public function getTipoActividad()
    {
        return $this->tipoActividad;
    }

    /**
     * Set planMtto
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planMtto
     * @return Actividad
     */
    public function setPlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMtto = null)
    {
        $this->planMtto = $planMtto;

        return $this;
    }

    /**
     * Get planMtto
     *
     * @return \GEMA\gemaBundle\Entity\PlanMtto 
     */
    public function getPlanMtto()
    {
        return $this->planMtto;
    }
}
