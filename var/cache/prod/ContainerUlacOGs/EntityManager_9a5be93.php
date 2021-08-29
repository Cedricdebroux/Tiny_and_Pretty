<?php

namespace ContainerUlacOGs;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder78dfc = null;
    private $initializer11a70 = null;
    private static $publicProperties787a1 = [
        
    ];
    public function getConnection()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getConnection', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getMetadataFactory', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getExpressionBuilder', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'beginTransaction', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getCache', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getCache();
    }
    public function transactional($func)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'transactional', array('func' => $func), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->transactional($func);
    }
    public function commit()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'commit', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->commit();
    }
    public function rollback()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'rollback', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getClassMetadata', array('className' => $className), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'createQuery', array('dql' => $dql), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'createNamedQuery', array('name' => $name), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'createQueryBuilder', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'flush', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'clear', array('entityName' => $entityName), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->clear($entityName);
    }
    public function close()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'close', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->close();
    }
    public function persist($entity)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'persist', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'remove', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'refresh', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'detach', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'merge', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'contains', array('entity' => $entity), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getEventManager', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getConfiguration', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'isOpen', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getUnitOfWork', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getProxyFactory', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'initializeObject', array('obj' => $obj), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'getFilters', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'isFiltersStateClean', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'hasFilters', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return $this->valueHolder78dfc->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer11a70 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder78dfc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder78dfc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder78dfc->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, '__get', ['name' => $name], $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        if (isset(self::$publicProperties787a1[$name])) {
            return $this->valueHolder78dfc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78dfc;
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
        $targetObject = $this->valueHolder78dfc;
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
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78dfc;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder78dfc;
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
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, '__isset', array('name' => $name), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78dfc;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder78dfc;
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
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, '__unset', array('name' => $name), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78dfc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder78dfc;
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
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, '__clone', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        $this->valueHolder78dfc = clone $this->valueHolder78dfc;
    }
    public function __sleep()
    {
        $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, '__sleep', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
        return array('valueHolder78dfc');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer11a70 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer11a70;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer11a70 && ($this->initializer11a70->__invoke($valueHolder78dfc, $this, 'initializeProxy', array(), $this->initializer11a70) || 1) && $this->valueHolder78dfc = $valueHolder78dfc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder78dfc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder78dfc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
