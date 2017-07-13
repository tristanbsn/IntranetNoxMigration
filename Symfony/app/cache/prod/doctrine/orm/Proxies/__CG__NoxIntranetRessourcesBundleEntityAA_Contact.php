<?php

namespace Proxies\__CG__\NoxIntranet\RessourcesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AA_Contact extends \NoxIntranet\RessourcesBundle\Entity\AA_Contact implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nContact', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nClient', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nomContact', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'prenomContact', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'titre', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nomVille', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nomPays', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'codePostal', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'ligneDirecte', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'portable', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'fax'];
        }

        return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nContact', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nClient', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nomContact', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'prenomContact', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'titre', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nomVille', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'nomPays', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'codePostal', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'ligneDirecte', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'portable', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Contact' . "\0" . 'fax'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AA_Contact $proxy) {
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
    public function setNContact($nContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNContact', [$nContact]);

        return parent::setNContact($nContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getNContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNContact', []);

        return parent::getNContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setNClient($nClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNClient', [$nClient]);

        return parent::setNClient($nClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNClient', []);

        return parent::getNClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomContact($nomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContact', [$nomContact]);

        return parent::setNomContact($nomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContact', []);

        return parent::getNomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomContact($prenomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomContact', [$prenomContact]);

        return parent::setPrenomContact($prenomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomContact', []);

        return parent::getPrenomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomVille($nomVille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomVille', [$nomVille]);

        return parent::setNomVille($nomVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomVille', []);

        return parent::getNomVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomPays($nomPays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomPays', [$nomPays]);

        return parent::setNomPays($nomPays);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomPays', []);

        return parent::getNomPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal($codePostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setLigneDirecte($ligneDirecte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLigneDirecte', [$ligneDirecte]);

        return parent::setLigneDirecte($ligneDirecte);
    }

    /**
     * {@inheritDoc}
     */
    public function getLigneDirecte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLigneDirecte', []);

        return parent::getLigneDirecte();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortable($portable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortable', [$portable]);

        return parent::setPortable($portable);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortable', []);

        return parent::getPortable();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', [$fax]);

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', []);

        return parent::getFax();
    }

}