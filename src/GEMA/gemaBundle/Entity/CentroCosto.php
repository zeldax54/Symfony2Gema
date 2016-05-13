<?php
namespace GEMA\gemaBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * CentroCosto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GEMA\gemaBundle\Entity\CentroCostoRepository")
 */
class CentroCosto
{

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
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     */
    private $codigo;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Area" ,inversedBy="centroscosto", cascade={"persist"})
     */
    protected $area;

    /**
     * @ORM\ManyToOne(targetEntity="GEMA\gemaBundle\Entity\Departamento" ,inversedBy="centroscosto", cascade={"persist"})
     */
    protected $departamento;

    /**
     * @ORM\OneToMany(targetEntity="GEMA\gemaBundle\Entity\Activo" , mappedBy="centroCosto", cascade={"persist"})
     */
    protected $activos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return CentroCosto
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

    /**
     * Set area
     *
     * @param \GEMA\gemaBundle\Entity\Area $area
     * @return CentroCosto
     */
    public function setArea(\GEMA\gemaBundle\Entity\Area $area = null)
    {
        $this->area = $area;

        return $this;
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
     * Set departamento
     *
     * @param \GEMA\gemaBundle\Entity\Departamento $departamento
     * @return CentroCosto
     */
    public function setDepartamento(\GEMA\gemaBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \GEMA\gemaBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function __toString() {
        return $this->codigo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->area = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add area
     *
     * @param \GEMA\gemaBundle\Entity\Area $area
     * @return CentroCosto
     */
    public function addArea(\GEMA\gemaBundle\Entity\Area $area)
    {
        $this->area[] = $area;

        return $this;
    }

    /**
     * Remove area
     *
     * @param \GEMA\gemaBundle\Entity\Area $area
     */
    public function removeArea(\GEMA\gemaBundle\Entity\Area $area)
    {
        $this->area->removeElement($area);
    }
}
