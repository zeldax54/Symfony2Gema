<?php

namespace Proxies\__CG__\GEMA\gemaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PlanMtto extends \GEMA\gemaBundle\Entity\PlanMtto implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'id', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'nombre', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'ciclo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'fecha', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'tipoPrioridad', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'activo', 'ordenesTrabajo');
        }

        return array('__isInitialized__', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'id', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'nombre', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'ciclo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'fecha', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'tipoPrioridad', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\PlanMtto' . "\0" . 'activo', 'ordenesTrabajo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PlanMtto $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function preRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preRemove', array());

        return parent::preRemove();
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
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
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
    public function setCiclo($ciclo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiclo', array($ciclo));

        return parent::setCiclo($ciclo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiclo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiclo', array());

        return parent::getCiclo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoPrioridad(\GEMA\gemaBundle\Entity\TipoPrioridad $tipoPrioridad = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoPrioridad', array($tipoPrioridad));

        return parent::setTipoPrioridad($tipoPrioridad);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoPrioridad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoPrioridad', array());

        return parent::getTipoPrioridad();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo(\GEMA\gemaBundle\Entity\Activo $activo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', array($activo));

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', array());

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrdenesTrabajo(\GEMA\gemaBundle\Entity\OrdenTrabajo $ordenesTrabajo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrdenesTrabajo', array($ordenesTrabajo));

        return parent::addOrdenesTrabajo($ordenesTrabajo);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdenesTrabajo(\GEMA\gemaBundle\Entity\OrdenTrabajo $ordenesTrabajo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdenesTrabajo', array($ordenesTrabajo));

        return parent::setOrdenesTrabajo($ordenesTrabajo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrdenesTrabajo(\GEMA\gemaBundle\Entity\OrdenTrabajo $ordenesTrabajo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrdenesTrabajo', array($ordenesTrabajo));

        return parent::removeOrdenesTrabajo($ordenesTrabajo);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdenesTrabajo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdenesTrabajo', array());

        return parent::getOrdenesTrabajo();
    }

}