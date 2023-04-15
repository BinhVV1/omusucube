<?php

namespace Proxies\__CG__\Eccube\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Page extends \Eccube\Entity\Page implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'url', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'file_name', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'edit_type', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'author', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'description', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'keyword', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'meta_robots', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'meta_tags', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'PageLayouts', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'MasterPage'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'name', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'url', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'file_name', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'edit_type', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'author', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'description', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'keyword', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'meta_robots', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'meta_tags', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'PageLayouts', '' . "\0" . 'Eccube\\Entity\\Page' . "\0" . 'MasterPage'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Page $proxy) {
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
    public function getLayouts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayouts', []);

        return parent::getLayouts();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
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
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileName($fileName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileName', [$fileName]);

        return parent::setFileName($fileName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileName', []);

        return parent::getFileName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditType($editType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditType', [$editType]);

        return parent::setEditType($editType);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditType', []);

        return parent::getEditType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
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
    public function setKeyword($keyword = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeyword', [$keyword]);

        return parent::setKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeyword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeyword', []);

        return parent::getKeyword();
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
    public function setMetaRobots($metaRobots = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaRobots', [$metaRobots]);

        return parent::setMetaRobots($metaRobots);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaRobots()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaRobots', []);

        return parent::getMetaRobots();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaTags($metaTags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaTags', [$metaTags]);

        return parent::setMetaTags($metaTags);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaTags', []);

        return parent::getMetaTags();
    }

    /**
     * {@inheritDoc}
     */
    public function getPageLayouts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageLayouts', []);

        return parent::getPageLayouts();
    }

    /**
     * {@inheritDoc}
     */
    public function addPageLayout(\Eccube\Entity\PageLayout $PageLayout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPageLayout', [$PageLayout]);

        return parent::addPageLayout($PageLayout);
    }

    /**
     * {@inheritDoc}
     */
    public function removePageLayout(\Eccube\Entity\PageLayout $PageLayout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePageLayout', [$PageLayout]);

        return parent::removePageLayout($PageLayout);
    }

    /**
     * {@inheritDoc}
     */
    public function setMasterPage(\Eccube\Entity\Page $page = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMasterPage', [$page]);

        return parent::setMasterPage($page);
    }

    /**
     * {@inheritDoc}
     */
    public function getMasterPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMasterPage', []);

        return parent::getMasterPage();
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNo($layoutId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNo', [$layoutId]);

        return parent::getSortNo($layoutId);
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
