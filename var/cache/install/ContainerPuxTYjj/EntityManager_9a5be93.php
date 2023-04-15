<?php

namespace ContainerPuxTYjj;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8e36a = null;
    private $initializerb9bb9 = null;
    private static $publicProperties29d5a = [
        
    ];
    public function getConnection()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getConnection', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getMetadataFactory', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getExpressionBuilder', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'beginTransaction', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getCache', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'transactional', array('func' => $func), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'commit', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->commit();
    }
    public function rollback()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'rollback', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createQuery', array('dql' => $dql), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createQueryBuilder', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'flush', array('entity' => $entity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'clear', array('entityName' => $entityName), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->clear($entityName);
    }
    public function close()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'close', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->close();
    }
    public function persist($entity)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'persist', array('entity' => $entity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'remove', array('entity' => $entity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->remove($entity);
    }
    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->refresh($entity, $lockMode);
    }
    public function detach($entity)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'detach', array('entity' => $entity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'merge', array('entity' => $entity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'contains', array('entity' => $entity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getEventManager', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getConfiguration', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'isOpen', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getUnitOfWork', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getProxyFactory', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getFilters', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'isFiltersStateClean', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'hasFilters', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb9bb9 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;
        if (! $this->valueHolder8e36a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8e36a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8e36a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__get', ['name' => $name], $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        if (isset(self::$publicProperties29d5a[$name])) {
            return $this->valueHolder8e36a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e36a;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8e36a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e36a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8e36a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__isset', array('name' => $name), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e36a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8e36a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__unset', array('name' => $name), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e36a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8e36a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__clone', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        $this->valueHolder8e36a = clone $this->valueHolder8e36a;
    }
    public function __sleep()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__sleep', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return array('valueHolder8e36a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb9bb9 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb9bb9;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'initializeProxy', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8e36a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8e36a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
