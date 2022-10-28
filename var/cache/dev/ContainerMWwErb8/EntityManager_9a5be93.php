<?php

namespace ContainerMWwErb8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70867 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerde76f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties47fba = [
        
    ];

    public function getConnection()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getConnection', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getMetadataFactory', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getExpressionBuilder', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'beginTransaction', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getCache', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getCache();
    }

    public function transactional($func)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'transactional', array('func' => $func), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'wrapInTransaction', array('func' => $func), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'commit', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->commit();
    }

    public function rollback()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'rollback', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getClassMetadata', array('className' => $className), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'createQuery', array('dql' => $dql), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'createNamedQuery', array('name' => $name), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'createQueryBuilder', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'flush', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'clear', array('entityName' => $entityName), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->clear($entityName);
    }

    public function close()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'close', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->close();
    }

    public function persist($entity)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'persist', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'remove', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'refresh', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'detach', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'merge', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getRepository', array('entityName' => $entityName), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'contains', array('entity' => $entity), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getEventManager', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getConfiguration', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'isOpen', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getUnitOfWork', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getProxyFactory', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'initializeObject', array('obj' => $obj), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'getFilters', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'isFiltersStateClean', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'hasFilters', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return $this->valueHolder70867->hasFilters();
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

        $instance->initializerde76f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder70867) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70867 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70867->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, '__get', ['name' => $name], $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        if (isset(self::$publicProperties47fba[$name])) {
            return $this->valueHolder70867->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70867;

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

        $targetObject = $this->valueHolder70867;
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
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70867;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70867;
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
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, '__isset', array('name' => $name), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70867;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70867;
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
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, '__unset', array('name' => $name), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70867;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70867;
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
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, '__clone', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        $this->valueHolder70867 = clone $this->valueHolder70867;
    }

    public function __sleep()
    {
        $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, '__sleep', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;

        return array('valueHolder70867');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerde76f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerde76f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerde76f && ($this->initializerde76f->__invoke($valueHolder70867, $this, 'initializeProxy', array(), $this->initializerde76f) || 1) && $this->valueHolder70867 = $valueHolder70867;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70867;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70867;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
