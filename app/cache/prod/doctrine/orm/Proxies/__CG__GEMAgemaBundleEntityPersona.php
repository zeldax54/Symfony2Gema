<?php

namespace Proxies\__CG__\GEMA\gemaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Persona extends \GEMA\gemaBundle\Entity\Persona implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'id', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'cIdentidad', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'nombre', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'apellidos', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'sexo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'direccion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'cargo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'salario', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'gastoDia', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'gastoHora', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'gastoMinuto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'profesion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'usuario', 'proPers');
        }

        return array('__isInitialized__', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'id', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'cIdentidad', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'nombre', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'apellidos', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'sexo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'direccion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'cargo', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'salario', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'gastoDia', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'gastoHora', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'gastoMinuto', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'profesion', '' . "\0" . 'GEMA\\gemaBundle\\Entity\\Persona' . "\0" . 'usuario', 'proPers');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Persona $proxy) {
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
    public function preRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preRemove', array());

        return parent::preRemove();
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
    public function setCIdentidad($cIdentidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCIdentidad', array($cIdentidad));

        return parent::setCIdentidad($cIdentidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCIdentidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCIdentidad', array());

        return parent::getCIdentidad();
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
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', array($apellidos));

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', array());

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', array($direccion));

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', array());

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCargo($cargo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCargo', array($cargo));

        return parent::setCargo($cargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCargo', array());

        return parent::getCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalario($salario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalario', array($salario));

        return parent::setSalario($salario);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalario', array());

        return parent::getSalario();
    }

    /**
     * {@inheritDoc}
     */
    public function setGastoDia($gastoDia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGastoDia', array($gastoDia));

        return parent::setGastoDia($gastoDia);
    }

    /**
     * {@inheritDoc}
     */
    public function getGastoDia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGastoDia', array());

        return parent::getGastoDia();
    }

    /**
     * {@inheritDoc}
     */
    public function setGastoHora($gastoHora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGastoHora', array($gastoHora));

        return parent::setGastoHora($gastoHora);
    }

    /**
     * {@inheritDoc}
     */
    public function getGastoHora()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGastoHora', array());

        return parent::getGastoHora();
    }

    /**
     * {@inheritDoc}
     */
    public function setGastoMinuto($gastoMinuto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGastoMinuto', array($gastoMinuto));

        return parent::setGastoMinuto($gastoMinuto);
    }

    /**
     * {@inheritDoc}
     */
    public function getGastoMinuto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGastoMinuto', array());

        return parent::getGastoMinuto();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfesion($profesion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfesion', array($profesion));

        return parent::setProfesion($profesion);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesion', array());

        return parent::getProfesion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\GEMA\gemaBundle\Entity\Usuario $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
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
    public function addUsuario(\GEMA\gemaBundle\Entity\Usuario $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuario', array($usuarios));

        return parent::addUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuario(\GEMA\gemaBundle\Entity\Usuario $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuario', array($usuarios));

        return parent::removeUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarios', array());

        return parent::getUsuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexo($sexo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexo', array($sexo));

        return parent::setSexo($sexo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexo', array());

        return parent::getSexo();
    }

}