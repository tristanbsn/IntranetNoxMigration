<?php

namespace Proxies\__CG__\NoxIntranet\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \NoxIntranet\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'local', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'salt', 'roles', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'agence', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'lastActivity', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'matriceCompetence', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'lastViewedPage', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'hasReadCharteInformatique', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'charteInformatiqueReadingDate', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'developpementsProfessionnels'];
        }

        return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'local', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'salt', 'roles', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'agence', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'lastActivity', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'matriceCompetence', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'lastViewedPage', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'hasReadCharteInformatique', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'charteInformatiqueReadingDate', '' . "\0" . 'NoxIntranet\\UserBundle\\Entity\\User' . "\0" . 'developpementsProfessionnels'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocal', []);

        return parent::getLocal();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocal($local)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocal', [$local]);

        return parent::setLocal($local);
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function setAgence($agence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgence', [$agence]);

        return parent::setAgence($agence);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgence', []);

        return parent::getAgence();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullname($fullname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullname', [$fullname]);

        return parent::setFullname($fullname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullname', []);

        return parent::getFullname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastActivity($lastActivity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastActivity', [$lastActivity]);

        return parent::setLastActivity($lastActivity);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastActivity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastActivity', []);

        return parent::getLastActivity();
    }

    /**
     * {@inheritDoc}
     */
    public function isActiveNow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActiveNow', []);

        return parent::isActiveNow();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatriceCompetence(\NoxIntranet\UserBundle\Entity\MatriceCompetence $matriceCompetence = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatriceCompetence', [$matriceCompetence]);

        return parent::setMatriceCompetence($matriceCompetence);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastViewedPage($lastViewedPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastViewedPage', [$lastViewedPage]);

        return parent::setLastViewedPage($lastViewedPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatriceCompetence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatriceCompetence', []);

        return parent::getMatriceCompetence();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastViewedPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastViewedPage', []);

        return parent::getLastViewedPage();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function setHasReadCharteInformatique($hasReadCharteInformatique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHasReadCharteInformatique', [$hasReadCharteInformatique]);

        return parent::setHasReadCharteInformatique($hasReadCharteInformatique);
    }

    /**
     * {@inheritDoc}
     */
    public function getHasReadCharteInformatique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHasReadCharteInformatique', []);

        return parent::getHasReadCharteInformatique();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharteInformatiqueReadingDate($charteInformatiqueReadingDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharteInformatiqueReadingDate', [$charteInformatiqueReadingDate]);

        return parent::setCharteInformatiqueReadingDate($charteInformatiqueReadingDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharteInformatiqueReadingDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharteInformatiqueReadingDate', []);

        return parent::getCharteInformatiqueReadingDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addDeveloppementsProfessionnel(\NoxIntranet\UserBundle\Entity\DeveloppementProfessionnel $developpementsProfessionnel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeveloppementsProfessionnel', [$developpementsProfessionnel]);

        return parent::addDeveloppementsProfessionnel($developpementsProfessionnel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDeveloppementsProfessionnel(\NoxIntranet\UserBundle\Entity\DeveloppementProfessionnel $developpementsProfessionnel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDeveloppementsProfessionnel', [$developpementsProfessionnel]);

        return parent::removeDeveloppementsProfessionnel($developpementsProfessionnel);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeveloppementsProfessionnels()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeveloppementsProfessionnels', []);

        return parent::getDeveloppementsProfessionnels();
    }

}
