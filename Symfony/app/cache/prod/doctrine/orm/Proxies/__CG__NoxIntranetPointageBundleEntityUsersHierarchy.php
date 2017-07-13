<?php

namespace Proxies\__CG__\NoxIntranet\PointageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UsersHierarchy extends \NoxIntranet\PointageBundle\Entity\UsersHierarchy implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'username', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'nom', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'prenom', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'aa', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'da', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'rh', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'n2', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'etablissement', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'societe', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'matricule'];
        }

        return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'username', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'nom', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'prenom', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'aa', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'da', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'rh', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'n2', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'etablissement', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'societe', '' . "\0" . 'NoxIntranet\\PointageBundle\\Entity\\UsersHierarchy' . "\0" . 'matricule'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UsersHierarchy $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setAa($aa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAa', [$aa]);

        return parent::setAa($aa);
    }

    /**
     * {@inheritDoc}
     */
    public function getAa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAa', []);

        return parent::getAa();
    }

    /**
     * {@inheritDoc}
     */
    public function setDa($da)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDa', [$da]);

        return parent::setDa($da);
    }

    /**
     * {@inheritDoc}
     */
    public function getDa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDa', []);

        return parent::getDa();
    }

    /**
     * {@inheritDoc}
     */
    public function setRh($rh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRh', [$rh]);

        return parent::setRh($rh);
    }

    /**
     * {@inheritDoc}
     */
    public function getRh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRh', []);

        return parent::getRh();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtablissement($etablissement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtablissement', [$etablissement]);

        return parent::setEtablissement($etablissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtablissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtablissement', []);

        return parent::getEtablissement();
    }

    /**
     * {@inheritDoc}
     */
    public function setN2($n2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setN2', [$n2]);

        return parent::setN2($n2);
    }

    /**
     * {@inheritDoc}
     */
    public function getN2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getN2', []);

        return parent::getN2();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule($matricule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$matricule]);

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setSociete($societe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSociete', [$societe]);

        return parent::setSociete($societe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSociete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSociete', []);

        return parent::getSociete();
    }

}
