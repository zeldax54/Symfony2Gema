<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\FacturaRepository")
 */
class Factura {

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
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=11)
     */
    private $codigo;
    
    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Proveedor",inversedBy="facturas", cascade={"persist"}) 
     * @ORM\JoinColumn(nullable=false)
     */
    private $proveedor;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\Activo" , mappedBy="factura", cascade={"persist"}) 
     */
    protected $activos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Factura
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Factura
     */
    public function setPrecio($precio) {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio() {
        return $this->precio;
    }

    public function __toString() {
        return $this->getCodigo();
    }
    
     /**
     * Set proveedor
     *
     * @param \GEMA\gemaBundle\Entity\Proveedor $proveedor
     * @return Activo
     */
    public function setProveedor(\GEMA\gemaBundle\Entity\Proveedor $proveedor = null) {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \GEMA\gemaBundle\Entity\Proveedor 
     */
    public function getProveedor() {
        return $this->proveedor;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->activos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fecha = new \DateTime();
    }

    /**
     * Add activos
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activos
     * @return Factura
     */
    public function addActivo(\GEMA\gemaBundle\Entity\Activo $activos) {
        $this->activos[] = $activos;

        return $this;
    }

    /**
     * Remove activos
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activos
     */
    public function removeActivo(\GEMA\gemaBundle\Entity\Activo $activos) {
        $this->activos->removeElement($activos);
    }

    /**
     * Get activos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivos() {
        return $this->activos;
    }


    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Factura
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
