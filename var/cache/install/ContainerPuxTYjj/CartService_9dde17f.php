<?php

namespace ContainerPuxTYjj;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CartService.php';
class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8e36a = null;
    private $initializerb9bb9 = null;
    private static $publicProperties29d5a = [
        
    ];
    public function getCarts($empty_delete = false)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getCarts($empty_delete);
    }
    public function getPersistedCarts()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getPersistedCarts', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getPersistedCarts();
    }
    public function getSessionCarts()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getSessionCarts', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getSessionCarts();
    }
    public function mergeFromPersistedCart()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'mergeFromPersistedCart', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->mergeFromPersistedCart();
    }
    public function getCart()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getCart', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getCart();
    }
    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->addProduct($ProductClass, $quantity);
    }
    public function removeProduct($ProductClass)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->removeProduct($ProductClass);
    }
    public function save()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'save', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->save();
    }
    public function setPreOrderId($pre_order_id)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->setPreOrderId($pre_order_id);
    }
    public function getPreOrderId()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getPreOrderId', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getPreOrderId();
    }
    public function clear()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'clear', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->clear();
    }
    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->setCartItemComparator($cartItemComparator);
    }
    public function setPrimary($cartKey)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->setPrimary($cartKey);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);
        $instance->initializerb9bb9 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;
        if (! $this->valueHolder8e36a) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolder8e36a = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
        }
        $this->valueHolder8e36a->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }
    public function & __get($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__get', ['name' => $name], $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        if (isset(self::$publicProperties29d5a[$name])) {
            return $this->valueHolder8e36a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');
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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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

if (!\class_exists('CartService_9dde17f', false)) {
    \class_alias(__NAMESPACE__.'\\CartService_9dde17f', 'CartService_9dde17f', false);
}
