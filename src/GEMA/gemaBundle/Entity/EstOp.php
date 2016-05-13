<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstOp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\EstOpRepository")
 */
class EstOp {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="desde", type="datetime")
     */
    private $desde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hasta", type="datetime")
     */
    private $hasta;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Activo",inversedBy="estOps", cascade={"persist"}) 
     */
    private $activo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set desde
     *
     * @param \DateTime $desde
     * @return EstOp
     */
    public function setDesde($desde) {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return \DateTime 
     */
    public function getDesde() {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param \DateTime $hasta
     * @return EstOp
     */
    public function setHasta($hasta) {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return \DateTime 
     */
    public function getHasta() {
        return $this->hasta;
    }

    /**
     * Set activo
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activo
     * @return EstOp
     */
    public function setActivo(\GEMA\gemaBundle\Entity\Activo $activo = null) {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return \GEMA\gemaBundle\Entity\Activo 
     */
    public function getActivo() {
        return $this->activo;
    }

}
