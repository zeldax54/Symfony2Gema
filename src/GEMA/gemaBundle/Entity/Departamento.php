<?php

namespace GEMA\gemaBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\DepartamentoRepository")
 */
class Departamento {

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
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Area",cascade={"persist"})
     * @ORM\JoinColumn()
     */
    private $area;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Localizacion", cascade={"persist"})
     * @ORM\JoinColumn()
     */
    private $localizacion;

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
     * @return Departamento
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

    


    public function setArea(\GEMA\gemaBundle\Entity\Area $area = null) {
        $this->area = $area;
        return $this;
    }

    public function setLocalizacion(\GEMA\gemaBundle\Entity\Localizacion $localizacion = null) {
        $this->localizacion = $localizacion;
        return $this;
    }



    public function addArea(Area $areap)
    {

        if (!$this->area->contains($areap)) {
            die();
            $this->area->add($areap);
        }
    }



 
    /**
     * Get area
     *
     * @return \GEMA\gemaBundle\Entity\Area 
     */
    public function getArea()
    {
        return $this->area;
    }


    /**
     * Get Localizacion
     *
     * @return \GEMA\gemaBundle\Entity\Localizacion
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->centroscosto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add centroscosto
     *
     * @param \GEMA\gemaBundle\Entity\CentroCosto $centroscosto
     * @return Departamento
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
