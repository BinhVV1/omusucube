<?php

namespace Proxies\__CG__\Eccube\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Delivery extends \Eccube\Entity\Delivery implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'service_name', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'description', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'confirm_url', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'visible', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'PaymentOptions', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'DeliveryFees', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'DeliveryTimes', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'SaleType'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'service_name', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'description', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'confirm_url', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'visible', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'PaymentOptions', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'DeliveryFees', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'DeliveryTimes', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\Delivery' . "\0" . 'SaleType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Delivery $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function setName($name = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceName($serviceName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceName', [$serviceName]);

        return parent::setServiceName($serviceName);
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServiceName', []);

        return parent::getServiceName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmUrl($confirmUrl = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmUrl', [$confirmUrl]);

        return parent::setConfirmUrl($confirmUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmUrl', []);

        return parent::getConfirmUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setSortNo($sortNo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSortNo', [$sortNo]);

        return parent::setSortNo($sortNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNo', []);

        return parent::getSortNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addPaymentOption(\Eccube\Entity\PaymentOption $paymentOption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPaymentOption', [$paymentOption]);

        return parent::addPaymentOption($paymentOption);
    }

    /**
     * {@inheritDoc}
     */
    public function removePaymentOption(\Eccube\Entity\PaymentOption $paymentOption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePaymentOption', [$paymentOption]);

        return parent::removePaymentOption($paymentOption);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentOptions', []);

        return parent::getPaymentOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addDeliveryFee(\Eccube\Entity\DeliveryFee $deliveryFee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeliveryFee', [$deliveryFee]);

        return parent::addDeliveryFee($deliveryFee);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDeliveryFee(\Eccube\Entity\DeliveryFee $deliveryFee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDeliveryFee', [$deliveryFee]);

        return parent::removeDeliveryFee($deliveryFee);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryFees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryFees', []);

        return parent::getDeliveryFees();
    }

    /**
     * {@inheritDoc}
     */
    public function addDeliveryTime(\Eccube\Entity\DeliveryTime $deliveryTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeliveryTime', [$deliveryTime]);

        return parent::addDeliveryTime($deliveryTime);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDeliveryTime(\Eccube\Entity\DeliveryTime $deliveryTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDeliveryTime', [$deliveryTime]);

        return parent::removeDeliveryTime($deliveryTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryTimes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryTimes', []);

        return parent::getDeliveryTimes();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaleType(\Eccube\Entity\Master\SaleType $saleType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaleType', [$saleType]);

        return parent::setSaleType($saleType);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaleType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaleType', []);

        return parent::getSaleType();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}
