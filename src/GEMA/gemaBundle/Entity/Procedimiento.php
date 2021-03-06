<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procedimiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\ProcedimientoRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class Procedimiento {

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
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="organizacionProductiva", type="string", length=255, nullable=true)
     */
    private $organizacionProductiva;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempoTotal", type="float", nullable=true)
     */
    private $tiempoTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="costoTotal", type="float",nullable=true)
     */
    private $costoTotal;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\OtRep" , mappedBy="procedimiento", cascade={"persist"}) 
     */
    private $otReps;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\ProIns" , mappedBy="procedimiento", cascade={"persist"}) 
     */
    private $ProIns;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\ProHer" , mappedBy="procedimiento", cascade={"persist"}) 
     */
    private $ProHers;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\ProPer" , mappedBy="procedimiento", cascade={"persist"}) 
     */
    private $ProPers;

    /**
     * @ORM\ManyToMany(targetEntity="Accion", inversedBy="procs", cascade={"persist"}) 
     */
    private $acciones;

    /**
     * @ORM\ManyToMany(targetEntity="OrdenTrabajo", cascade={"persist"}, mappedBy="procedimientos") 
     */
    private $ordenTrabajos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Procedimiento
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Procedimiento
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
     * Set organizacionProductiva
     *
     * @param string $organizacionProductiva
     * @return Procedimiento
     */
    public function setOrganizacionProductiva($organizacionProductiva) {
        $this->organizacionProductiva = $organizacionProductiva;

        return $this;
    }

    /**
     * Get organizacionProductiva
     *
     * @return string 
     */
    public function getOrganizacionProductiva() {
        return $this->organizacionProductiva;
    }

    /**
     * Set tiempoTotal
     *
     * @param integer $tiempoTotal
     * @return Procedimiento
     */
    public function setTiempoTotal($tiempoTotal) {
        $this->tiempoTotal = $tiempoTotal;

        return $this;
    }

    /**
     * Get tiempoTotal
     *
     * @return integer 
     */
    public function getTiempoTotal() {
        return $this->tiempoTotal;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->acciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->otReps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ProHers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ProIns = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ProPers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ordenTrabajos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add otReps
     *
     * @param \GEMA\gemaBundle\Entity\OtRep $otReps
     * @return Procedimiento
     */
    public function addOtRep(\GEMA\gemaBundle\Entity\OtRep $otReps) {
        if (!$this->otReps->contains($otReps)) {
            $otReps->setProcedimiento($this);
            $this->otReps->add($otReps);
        }

        return $this;
    }

    /**
     * Remove otReps
     *
     * @param \GEMA\gemaBundle\Entity\OtRep $otReps
     */
    public function removeOtRep(\GEMA\gemaBundle\Entity\OtRep $otReps) {
        $this->otReps->removeElement($otReps);
    }

    /**
     * Get otReps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOtReps() {
        return $this->otReps;
    }

    /**
     * Add ProIns
     *
     * @param \GEMA\gemaBundle\Entity\ProIns $proIns
     * @return Procedimiento
     */
    public function addProIn(\GEMA\gemaBundle\Entity\ProIns $proIns) {
        if (!$this->ProIns->contains($proIns)) {
            $proIns->setProcedimiento($this);
            $this->ProIns->add($proIns);
        }

        return $this;
    }

    /**
     * Remove ProIns
     *
     * @param \GEMA\gemaBundle\Entity\ProIns $proIns
     */
    public function removeProIn(\GEMA\gemaBundle\Entity\ProIns $proIns) {
        $this->ProIns->removeElement($proIns);
    }

    /**
     * Get ProIns
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProIns() {
        return $this->ProIns;
    }

    /**
     * Add ProHers
     *
     * @param \GEMA\gemaBundle\Entity\ProHer $proHers
     * @return Procedimiento
     */
    public function addProHer(\GEMA\gemaBundle\Entity\ProHer $proHers) {
        if (!$this->ProHers->contains($proHers)) {
            $proHers->setProcedimiento($this);
            $this->ProHers->add($proHers);
        }
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

    /**
     * Add ProPers
     *
     * @param \GEMA\gemaBundle\Entity\ProPer $proPers
     * @return Procedimiento
     */
    public function addProPer(\GEMA\gemaBundle\Entity\ProPer $proPers) {
        if (!$this->ProPers->contains($proPers)) {
            $proPers->setProcedimiento($this);
            $this->ProPers->add($proPers);
        }

        return $this;
    }

    /**
     * Remove ProPers
     *
     * @param \GEMA\gemaBundle\Entity\ProPer $proPers
     */
    public function removeProPer(\GEMA\gemaBundle\Entity\ProPer $proPers) {
        $this->ProPers->removeElement($proPers);
    }

    /**
     * Get ProPers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProPers() {
        return $this->ProPers;
    }

    /**
     * Add acciones
     *
     * @param \GEMA\gemaBundle\Entity\Accion $acciones
     * @return Procedimiento
     */
    public function addAccione(\GEMA\gemaBundle\Entity\Accion $acciones) {
        if (!$this->acciones->contains($acciones)) {
            $acciones->addProc($acciones);
            $this->acciones->add($acciones);
        }

        return $this;
    }

    /**
     * Remove acciones
     *
     * @param \GEMA\gemaBundle\Entity\Accion $acciones
     */
    public function removeAccione(\GEMA\gemaBundle\Entity\Accion $acciones) {
        $this->acciones->removeElement($acciones);
    }

    /**
     * Get acciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcciones() {
        return $this->acciones;
    }

    public function __toString() {
        return $this->getNombre();
    }

    /**
     * Add ordenTrabajos
     *
     * @param \GEMA\gemaBundle\Entity\OrdenTrabajo $ordenTrabajos
     * @return Procedimiento
     */
    public function addOrdenTrabajo(\GEMA\gemaBundle\Entity\OrdenTrabajo $ordenTrabajos) {
        $this->ordenTrabajos[] = $ordenTrabajos;

        return $this;
    }

    /**
     * Remove ordenTrabajos
     *
     * @param \GEMA\gemaBundle\Entity\OrdenTrabajo $ordenTrabajos
     */
    public function removeOrdenTrabajo(\GEMA\gemaBundle\Entity\OrdenTrabajo $ordenTrabajos) {
        $this->ordenTrabajos->removeElement($ordenTrabajos);
    }

    /**
     * Get ordenTrabajos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdenTrabajos() {
        return $this->ordenTrabajos;
    }

    /**
     * @ORM\PrePersist
     * Give noActivo to the Activo
     */
    public function prePersist() {
        $this->updateCostoTotal();
        $ots = $this->getOrdenTrabajos();
        foreach ($ots as $ot) {
            $ot->updateCostos();
        }
    }

    public function updateCostoTotal() {
        $this->setCostoTotal(0);
        foreach ($this->getOtReps() as $value) {
            $this->setCostoTotal($this->getCostoTotal() + $value->getCosto());
        }
        foreach ($this->getProHers() as $value) {
            $this->setCostoTotal($this->getCostoTotal() + $value->getCosto());
        }
        foreach ($this->getProIns() as $value) {
            $this->setCostoTotal($this->getCostoTotal() + $value->getCosto());
        }
        foreach ($this->getProPers() as $value) {
            $this->setCostoTotal($this->getCostoTotal() + $value->getCosto());
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updateCostoTotal();
        $ots = $this->getOrdenTrabajos();
        foreach ($ots as $ot) {
            $ot->updateCostos();
        }
    }

    /**
     * Set costoTotal
     *
     * @param float $costoTotal
     * @return Procedimiento
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

}
