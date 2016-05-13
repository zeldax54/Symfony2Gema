<?php

namespace GEMA\gemaBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\AreaRepository")
 */
class Area {

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
     * @Assert\NotBlank()
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\Activo" , mappedBy="area", cascade={"persist"}) 
     */
    protected $activos;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\Departamento" , mappedBy="area", cascade={"persist"})
     */

    protected $departamentos;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\CentroCosto", mappedBy="departamentos", cascade={"persist"})
     * @ORM\JoinColumn()
     */
    private $centroscosto;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Area
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

    public function __toString() {
        return $this->nombre;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departamentos=new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activos
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activos
     * @return Area
     */
    public function addActivo(\GEMA\gemaBundle\Entity\Activo $activos)
    {
        $this->activos[] = $activos;

        return $this;
    }

    /**
     * Remove activos
     *
     * @param \GEMA\gemaBundle\Entity\Activo $activos
     */
    public function removeActivo(\GEMA\gemaBundle\Entity\Activo $activos)
    {
        $this->activos->removeElement($activos);
    }

    /**
     * Get activos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivos()
    {
        return $this->activos;
    }

    /**
     * Add departamentos
     *
     * @param \GEMA\gemaBundle\Entity\Departamento $departamentos
     * @return Area
     */
    public function addDepartamento(\GEMA\gemaBundle\Entity\Departamento $departamento)
    {

        $departamento->setArea($this);
        $this->departamentos->add($departamento);


    }

    /**
     * Remove departamentos
     *
     * @param \GEMA\gemaBundle\Entity\Departamento $departamento
     */
    public function removeDepartamento(\GEMA\gemaBundle\Entity\Departamento $departamento)
    {

        $this->departamentos->removeElement($departamento);


    }



    /**
     * Get departamentos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartamentos()
    {
        return $this->departamentos;
    }

    /**
     * Add centroscosto
     *
     * @param \GEMA\gemaBundle\Entity\CentroCosto $centroscosto
     * @return Area
     */
    public function addCentroscosto(\GEMA\gemaBundle\Entity\CentroCosto $centroscosto)
    {
        $this->centroscosto[] = $centroscosto;

        return $this;
    }

    /**
     * Remove centroscosto
     *
     * @param \GEMA\gemaBundle\Entity\CentroCosto $centroscosto
     */
    public function removeCentroscosto(\GEMA\gemaBundle\Entity\CentroCosto $centroscosto)
    {
        $this->centroscosto->removeElement($centroscosto);
    }

    /**
     * Get centroscosto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCentroscosto()
    {
        return $this->centroscosto;
    }
}
