<?php

namespace ContainerP8FTNAX;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Types.php';
class Types_0fe571c extends \Plugin\Api42\GraphQL\Types implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8e36a = null;
    private $initializerb9bb9 = null;
    private static $publicProperties29d5a = [
        
    ];
    public function addAllowList(\Plugin\Api42\GraphQL\AllowList $allowList)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'addAllowList', array('allowList' => $allowList), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->addAllowList($allowList);
    }
    public function get($className)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'get', array('className' => $className), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->get($className);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Plugin\Api42\GraphQL\Types $instance) {
            unset($instance->entityManager, $instance->types, $instance->allowLists);
        }, $instance, 'Plugin\\Api42\\GraphQL\\Types')->__invoke($instance);
        $instance->initializerb9bb9 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        static $reflection;
        if (! $this->valueHolder8e36a) {
            $reflection = $reflection ?? new \ReflectionClass('Plugin\\Api42\\GraphQL\\Types');
            $this->valueHolder8e36a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Plugin\Api42\GraphQL\Types $instance) {
            unset($instance->entityManager, $instance->types, $instance->allowLists);
        }, $this, 'Plugin\\Api42\\GraphQL\\Types')->__invoke($this);
        }
        $this->valueHolder8e36a->__construct($entityManager);
    }
    public function & __get($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__get', ['name' => $name], $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        if (isset(self::$publicProperties29d5a[$name])) {
            return $this->valueHolder8e36a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Plugin\\Api42\\GraphQL\\Types');
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
        $realInstanceReflection = new \ReflectionClass('Plugin\\Api42\\GraphQL\\Types');
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
        $realInstanceReflection = new \ReflectionClass('Plugin\\Api42\\GraphQL\\Types');
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
        $realInstanceReflection = new \ReflectionClass('Plugin\\Api42\\GraphQL\\Types');
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
        \Closure::bind(function (\Plugin\Api42\GraphQL\Types $instance) {
            unset($instance->entityManager, $instance->types, $instance->allowLists);
        }, $this, 'Plugin\\Api42\\GraphQL\\Types')->__invoke($this);
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

if (!\class_exists('Types_0fe571c', false)) {
    \class_alias(__NAMESPACE__.'\\Types_0fe571c', 'Types_0fe571c', false);
}
