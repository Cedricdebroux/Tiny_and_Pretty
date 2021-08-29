<?php

namespace ContainerCyIWQla;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62339 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera5ba8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6a78 = [
        
    ];

    public function getConnection()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getConnection', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getMetadataFactory', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getExpressionBuilder', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'beginTransaction', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getCache', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getCache();
    }

    public function transactional($func)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'transactional', array('func' => $func), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->transactional($func);
    }

    public function commit()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'commit', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->commit();
    }

    public function rollback()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'rollback', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getClassMetadata', array('className' => $className), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'createQuery', array('dql' => $dql), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'createNamedQuery', array('name' => $name), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'createQueryBuilder', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'flush', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'clear', array('entityName' => $entityName), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->clear($entityName);
    }

    public function close()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'close', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->close();
    }

    public function persist($entity)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'persist', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'remove', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'refresh', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'detach', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'merge', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getRepository', array('entityName' => $entityName), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'contains', array('entity' => $entity), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getEventManager', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getConfiguration', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'isOpen', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getUnitOfWork', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getProxyFactory', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'initializeObject', array('obj' => $obj), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'getFilters', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'isFiltersStateClean', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'hasFilters', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return $this->valueHolder62339->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera5ba8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62339) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62339 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62339->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, '__get', ['name' => $name], $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        if (isset(self::$publicPropertiesf6a78[$name])) {
            return $this->valueHolder62339->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62339;

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

        $targetObject = $this->valueHolder62339;
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
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62339;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62339;
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
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, '__isset', array('name' => $name), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62339;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62339;
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
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, '__unset', array('name' => $name), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62339;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62339;
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
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, '__clone', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        $this->valueHolder62339 = clone $this->valueHolder62339;
    }

    public function __sleep()
    {
        $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, '__sleep', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;

        return array('valueHolder62339');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera5ba8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera5ba8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera5ba8 && ($this->initializera5ba8->__invoke($valueHolder62339, $this, 'initializeProxy', array(), $this->initializera5ba8) || 1) && $this->valueHolder62339 = $valueHolder62339;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62339;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62339;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
