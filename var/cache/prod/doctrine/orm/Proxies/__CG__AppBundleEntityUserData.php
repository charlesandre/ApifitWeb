<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserData extends \AppBundle\Entity\UserData implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'UID', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'age', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'avatar', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'averageDailySteps', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'height', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'startDayOfWeek', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'strideLengthRunning', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'weight'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'UID', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'age', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'avatar', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'averageDailySteps', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'height', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'startDayOfWeek', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'strideLengthRunning', '' . "\0" . 'AppBundle\\Entity\\UserData' . "\0" . 'weight'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserData $proxy) {
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
    public function getUID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUID', []);

        return parent::getUID();
    }

    /**
     * {@inheritDoc}
     */
    public function setAge($age)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAge', [$age]);

        return parent::setAge($age);
    }

    /**
     * {@inheritDoc}
     */
    public function getAge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAge', []);

        return parent::getAge();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAverageDailySteps($averageDailySteps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAverageDailySteps', [$averageDailySteps]);

        return parent::setAverageDailySteps($averageDailySteps);
    }

    /**
     * {@inheritDoc}
     */
    public function getAverageDailySteps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAverageDailySteps', []);

        return parent::getAverageDailySteps();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDayOfWeek($startDayOfWeek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDayOfWeek', [$startDayOfWeek]);

        return parent::setStartDayOfWeek($startDayOfWeek);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDayOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDayOfWeek', []);

        return parent::getStartDayOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setStrideLengthRunning($strideLengthRunning)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStrideLengthRunning', [$strideLengthRunning]);

        return parent::setStrideLengthRunning($strideLengthRunning);
    }

    /**
     * {@inheritDoc}
     */
    public function getStrideLengthRunning()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStrideLengthRunning', []);

        return parent::getStrideLengthRunning();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', [$weight]);

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', []);

        return parent::getWeight();
    }

}
