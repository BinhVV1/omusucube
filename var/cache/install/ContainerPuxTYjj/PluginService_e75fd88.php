<?php

namespace ContainerPuxTYjj;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8e36a = null;
    private $initializerb9bb9 = null;
    private static $publicProperties29d5a = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'install', array('path' => $path, 'source' => $source), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'installWithCode', array('code' => $code), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'preInstall', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createTempDir', array(), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'deleteDirs', array('arr' => $arr), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'checkSymbolName', array('string' => $string), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'deleteFile', array('path' => $path), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'checkSamePlugin', array('code' => $code), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'calcPluginDir', array('code' => $code), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'createPluginDir', array('d' => $d), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'unregisterPlugin', array('p' => $p), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'disable', array('plugin' => $plugin), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        return $this->valueHolder8e36a->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializerb9bb9 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder8e36a) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder8e36a = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolder8e36a->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializerb9bb9 && ($this->initializerb9bb9->__invoke($valueHolder8e36a, $this, '__get', ['name' => $name], $this->initializerb9bb9) || 1) && $this->valueHolder8e36a = $valueHolder8e36a;
        if (isset(self::$publicProperties29d5a[$name])) {
            return $this->valueHolder8e36a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
