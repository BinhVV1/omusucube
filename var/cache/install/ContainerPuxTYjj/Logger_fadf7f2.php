<?php

namespace ContainerPuxTYjj;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8e36a = null;
    private $initializerb9bb9 = null;
    private static $publicProperties29d5a = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'error', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'info', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializerb9bb9 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolder8e36a) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder8e36a = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolder8e36a->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__get', ['name' => $name], $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        if (isset(self::$publicProperties29d5a[$name])) {
            return $this->valueHolder8e36a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
