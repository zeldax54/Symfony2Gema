<?php

namespace Proxies\__CG__\GEMA\gemaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activo extends \GEMA\gemaBundle\Entity\Activo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'id', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'noInventario', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'noActivo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'nombre', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'marca', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'modelo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaDepreciacion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaInstalacion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaPuestaMarcha', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaUltimoMtto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaProximoMtto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'cicloMtto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'notas', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'factura', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'tipoActivo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'area', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'planMttos', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'estOps', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'centroCosto');
        }

        return array('__isInitialized__', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'id', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'noInventario', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'noActivo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'nombre', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'marca', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'modelo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaDepreciacion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaInstalacion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaPuestaMarcha', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaUltimoMtto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'fechaProximoMtto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'cicloMtto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'notas', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'factura', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'tipoActivo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'area', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'planMttos', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'estOps', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Activo' . "\0" . 'centroCosto');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoInventario($noInventario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoInventario', array($noInventario));

        return parent::setNoInventario($noInventario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoInventario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoInventario', array());

        return parent::getNoInventario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoActivo($noActivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoActivo', array($noActivo));

        return parent::setNoActivo($noActivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoActivo', array());

        return parent::getNoActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarca($marca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarca', array($marca));

        return parent::setMarca($marca);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarca', array());

        return parent::getMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setModelo($modelo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModelo', array($modelo));

        return parent::setModelo($modelo);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelo', array());

        return parent::getModelo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaDepreciacion($fechaDepreciacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaDepreciacion', array($fechaDepreciacion));

        return parent::setFechaDepreciacion($fechaDepreciacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaDepreciacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaDepreciacion', array());

        return parent::getFechaDepreciacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInstalacion($fechaInstalacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInstalacion', array($fechaInstalacion));

        return parent::setFechaInstalacion($fechaInstalacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInstalacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInstalacion', array());

        return parent::getFechaInstalacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaPuestaMarcha($fechaPuestaMarcha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaPuestaMarcha', array($fechaPuestaMarcha));

        return parent::setFechaPuestaMarcha($fechaPuestaMarcha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaPuestaMarcha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaPuestaMarcha', array());

        return parent::getFechaPuestaMarcha();
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaUltimoMtto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaUltimoMtto', array());

        return parent::getFechaUltimoMtto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaUltimoMtto($fechaUltimoMtto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaUltimoMtto', array($fechaUltimoMtto));

        return parent::setFechaUltimoMtto($fechaUltimoMtto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaProximoMtto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaProximoMtto', array());

        return parent::getFechaProximoMtto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaProximoMtto($fechaProximoMtto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaProximoMtto', array($fechaProximoMtto));

        return parent::setFechaProximoMtto($fechaProximoMtto);
    }

    /**
     * {@inheritDoc}
     */
    public function setNotas($notas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotas', array($notas));

        return parent::setNotas($notas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotas', array());

        return parent::getNotas();
    }

    /**
     * {@inheritDoc}
     */
    public function setFactura(\GEMA\gemaBundle\Entity\Factura $factura = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFactura', array($factura));

        return parent::setFactura($factura);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactura', array());

        return parent::getFactura();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoActivo(\GEMA\gemaBundle\Entity\TipoActivo $tipoActivo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoActivo', array($tipoActivo));

        return parent::setTipoActivo($tipoActivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoActivo', array());

        return parent::getTipoActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setArea(\GEMA\gemaBundle\Entity\Area $area = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArea', array($area));

        return parent::setArea($area);
    }

    /**
     * {@inheritDoc}
     */
    public function getArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArea', array());

        return parent::getArea();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setCicloMtto($cicloMtto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCicloMtto', array($cicloMtto));

        return parent::setCicloMtto($cicloMtto);
    }

    /**
     * {@inheritDoc}
     */
    public function getCicloMtto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCicloMtto', array());

        return parent::getCicloMtto();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function addEstOp(\GEMA\gemaBundle\Entity\EstOp $estOps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEstOp', array($estOps));

        return parent::addEstOp($estOps);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEstOp(\GEMA\gemaBundle\Entity\EstOp $estOps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEstOp', array($estOps));

        return parent::removeEstOp($estOps);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstOps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstOps', array());

        return parent::getEstOps();
    }

    /**
     * {@inheritDoc}
     */
    public function isValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isValid', array());

        return parent::isValid();
    }

    /**
     * {@inheritDoc}
     */
    public function Count()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'Count', array());

        return parent::Count();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMttos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlanMtto', array($planMttos));

        return parent::addPlanMtto($planMttos);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlanMtto(\GEMA\gemaBundle\Entity\PlanMtto $planMttos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlanMtto', array($planMttos));

        return parent::removePlanMtto($planMttos);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanMttos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanMttos', array());

        return parent::getPlanMttos();
    }

    /**
     * {@inheritDoc}
     */
    public function setCentroCosto($centroCosto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCentroCosto', array($centroCosto));

        return parent::setCentroCosto($centroCosto);
    }

    /**
     * {@inheritDoc}
     */
    public function getCentroCosto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCentroCosto', array());

        return parent::getCentroCosto();
    }

    /**
     * {@inheritDoc}
     */
    public function CountPlanes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'CountPlanes', array());

        return parent::CountPlanes();
    }

}
