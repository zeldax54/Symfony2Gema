<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Dumper;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Activo
 *
 * @ORM\Table()
 * @UniqueEntity("noInventario", message = "Este valor ya está asignado a un activo")
 * @UniqueEntity("noActivo", message = "Este valor ya está asignado a un activo")
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\ActivoRepository")
 * @ORM\HasLifecycleCallbacks() 
 */
class Activo {

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
     * @Assert\NotBlank(message = "Por favor, escribe un número de inventario")
     * @ORM\Column(name="noInventario", type="string", length=255)
     */
    private $noInventario = null;

    /**
     * @var string
     *
     * @ORM\Column(name="noActivo", type="string", length=255, nullable=true)
     */
    private $noActivo = null;

    /**
     * @var string
     * @Assert\NotBlank(message = "Por favor, dale un nombre al activo")
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     * @Assert\NotBlank(message = "Por favor, escribe la marca del activo")
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="fechaDepreciacion", type="date")
     */
    private $fechaDepreciacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInstalacion", type="date")
     */
    private $fechaInstalacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPuestaMarcha", type="date")
     */
    private $fechaPuestaMarcha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_Ultimo_Mtto", type="datetime", nullable=true)
     */
    private $fechaUltimoMtto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_Proximo_Mtto", type="datetime", nullable=true)
     */
    private $fechaProximoMtto;

    /**
     * @var integer
     * @ORM\Column(name="cicloMtto", type="integer")
     */
    private $cicloMtto;

    /**
     * @var string
     *
     * @ORM\Column(name="notas", type="text", nullable=true)
     */
    private $notas;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Factura",inversedBy="activos", cascade={"persist"}) 
     * @ORM\JoinColumn()
     */
    private $factura;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\TipoActivo",inversedBy="activos", cascade={"persist"}) 
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipoActivo;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Area",inversedBy="activos", cascade={"persist"}) 
     * @ORM\JoinColumn()
     */
    private $area;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\PlanMtto" , mappedBy="activo", cascade={"persist","remove"}) 
     */
    private $planMttos;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\EstOp" , mappedBy="activo", cascade={"persist", "remove"}) 
     */
    private $estOps;


    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\CentroCosto",inversedBy="activos", cascade={"persist"})
     * @ORM\JoinColumn()
     */
    private $centroCosto;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set noInventario
     *
     * @param string $noInventario
     * @return Activo
     */
    public function setNoInventario($noInventario) {
        $this->noInventario = $noInventario;

        return $this;
    }

    /**
     * Get noInventario
     *
     * @return string 
     */
    public function getNoInventario() {
        return $this->noInventario;
    }

    /**
     * Set noActivo
     *
     * @param string $noActivo
     * @return Activo
     */
    public function setNoActivo($noActivo) {
        $this->noActivo = $noActivo;

        return $this;
    }

    /**
     * Get noActivo
     *
     * @return string 
     */
    public function getNoActivo() {
        return $this->noActivo;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Activo
     */
    public function setMarca($marca) {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca() {
        return $this->marca;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Activo
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
     * Set modelo
     *
     * @param string $modelo
     * @return Activo
     */
    public function setModelo($modelo) {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo() {
        return $this->modelo;
    }

    /**
     * Set fechaDepreciacion
     *
     * @param \DateTime $fechaDepreciacion
     * @return Activo
     */
    public function setFechaDepreciacion($fechaDepreciacion) {
        $this->fechaDepreciacion = $fechaDepreciacion;

        return $this;
    }

    /**
     * Get fechaDepreciacion
     *
     * @return \DateTime 
     */
    public function getFechaDepreciacion() {
        return $this->fechaDepreciacion;
    }

    /**
     * Set fechaInstalacion
     *
     * @param \DateTime $fechaInstalacion
     * @return Activo
     */
    public function setFechaInstalacion($fechaInstalacion) {
        $this->fechaInstalacion = $fechaInstalacion;

        return $this;
    }

    /**
     * Get fechaInstalacion
     *
     * @return \DateTime 
     */
    public function getFechaInstalacion() {
        return $this->fechaInstalacion;
    }

    /**
     * Set fechaPuestaMarcha
     *
     * @param \DateTime $fechaPuestaMarcha
     * @return Activo
     */
    public function setFechaPuestaMarcha($fechaPuestaMarcha) {
        $this->fechaInstalacion = $fechaPuestaMarcha;
        $this->fechaPuestaMarcha = $fechaPuestaMarcha;

        return $this;
    }

    /**
     * Get fechaPuestaMarcha
     *
     * @return \DateTime 
     */
    public function getFechaPuestaMarcha() {
        return $this->fechaPuestaMarcha;
    }

    /**
     * Get fechaUltimoMtto
     *
     * @return \DateTime 
     */
    public function getFechaUltimoMtto() {
        return $this->fechaUltimoMtto;
    }

    /**
     * Set fechaUltimoMtto
     *
     * @param \DateTime $fechaUltimoMtto
     * @return Activo
     */
    public function setFechaUltimoMtto($fechaUltimoMtto) {
        $this->fechaUltimoMtto = $fechaUltimoMtto;

        return $this;
    }

    /**
     * Get fechaProximoMtto
     *
     * @return \DateTime 
     */
    public function getFechaProximoMtto() {
        return $this->fechaProximoMtto;
    }

    /**
     * Set fechaProximoMtto
     *
     * @param \DateTime $fechaProximoMtto
     * @return Activo
     */
    public function setFechaProximoMtto($fechaProximoMtto) {
        $this->fechaProximoMtto = $fechaProximoMtto;

        return $this;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return Activo
     */
    public function setNotas($notas) {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas() {
        return $this->notas;
    }

    /**
     * Set factura
     *
     * @param \GEMA\gemaBundle\Entity\Factura $factura
     * @return Activo
     */
    public function setFactura(\GEMA\gemaBundle\Entity\Factura $factura = null) {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return \GEMA\gemaBundle\Entity\Factura 
     */
    public function getFactura() {

        return $this->factura;
    }

    /**
     * Set tipoActivo
     *
     * @param \GEMA\gemaBundle\Entity\TipoActivo $tipoActivo
     * @return Activo
     */
    public function setTipoActivo(\GEMA\gemaBundle\Entity\TipoActivo $tipoActivo = null) {
        $this->tipoActivo = $tipoActivo;

        return $this;
    }

    /**
     * Get tipoActivo
     *
     * @return \GEMA\gemaBundle\Entity\TipoActivo 
     */
    public function getTipoActivo() {
        return $this->tipoActivo;
    }

    /**
     * Set area
     *
     * @param \GEMA\gemaBundle\Entity\Area $area
     * @return Activo
     */
    public function setArea(\GEMA\gemaBundle\Entity\Area $area = null) {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \GEMA\gemaBundle\Entity\Area 
     */
    public function getArea() {
        return $this->area;
    }

    public function __toString() {
        return $this->nombre . ' ' . $this->noInventario;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->estOps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->planMttos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cicloMtto
     *
     * @param integer $cicloMtto
     * @return Activo
     */
    public function setCicloMtto($cicloMtto) {
        $this->cicloMtto = $cicloMtto;

        return $this;
    }

    /**
     * Get cicloMtto
     *
     * @return integer 
     */
    public function getCicloMtto() {
        return $this->cicloMtto;
    }

    /**
     * @ORM\PrePersist
     * Give noActivo to the Activo
     */
    public function prePersist() {
        if (!file_exists('consecutive.yml')) {
            $this->updateYaml(null);
        }
        $yaml = Yaml::parse(file_get_contents('consecutive.yml'));
        $this->updateYaml($yaml);
        $no = "AF_" . $this->getTipoActivo()->getCodificador() . "_" . $yaml['anno'] . "_" . $yaml['number'];
        $this->setNoActivo($no);
    }

    private function updateYaml($yaml) {
        if ($yaml == null) {
            $yaml = array('number' => 0, 'anno' => 1900);
        }
        $date = new DateTime();
        if ($date->format('Y') > $yaml['anno']) {
            $yaml['anno'] = $date->format('Y');
            $yaml['number'] = 0;
        }
        $yaml['number'] ++;
        $dumper = new Dumper();
        $yaml = $dumper->dump($yaml);
        file_put_contents('consecutive.yml', $yaml);
    }

    /**
     * Add estOps
     *
     * @param \GEMA\gemaBundle\Entity\EstOp $estOps
     * @return Activo
     */
    public function addEstOp(\GEMA\gemaBundle\Entity\EstOp $estOps) {

        if (!$this->estOps->contains($estOps)) {
            $estOps->setActivo($this);
            $this->estOps->add($estOps);
        }

        return $this;
    }

    /**
     * Remove estOps
     *
     * @param \GEMA\gemaBundle\Entity\EstOp $estOps
     */
    public function removeEstOp(\GEMA\gemaBundle\Entity\EstOp $estOps) {
        $this->estOps->removeElement($estOps);
    }

    /**
     * Get estOps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstOps() {
       return $this->estOps;
    }

    /**
     * @Assert\True()
     */
    public function isValid() {
        return ($this->getFechaInstalacion() <= $this->getFechaPuestaMarcha());
    }

    public function Count()
    {
        return count($this->estOps);
    }


    /**
     * Add planMttos
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planMttos
     * @return Activo
     */
    public function addPlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMttos)
    {
        $this->planMttos[] = $planMttos;

        return $this;
    }

    /**
     * Remove planMttos
     *
     * @param \GEMA\gemaBundle\Entity\PlanMtto $planMttos
     */
    public function removePlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMttos)
    {
        $this->planMttos->removeElement($planMttos);
    }

    /**
     * Get planMttos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanMttos()
    {
        return $this->planMttos;
    }

    /**
     * Set centroCosto
     *
     * @param string $centroCosto
     * @return Activo
     */
    public function setCentroCosto($centroCosto)
    {
        $this->centroCosto = $centroCosto;

        return $this;
    }

    /**
     * Get centroCosto
     *
     * @return string 
     */
    public function getCentroCosto()
    {
        return $this->centroCosto;
    }

    public function CountPlanes()
    {
        return count($this->planMttos);
    }
}
