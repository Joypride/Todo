<?php

namespace ContainerM72fwEj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5435b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0e0c9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37f65 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getConnection', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getMetadataFactory', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getExpressionBuilder', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'beginTransaction', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getCache', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'transactional', array('func' => $func), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'commit', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->commit();
    }

    public function rollback()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'rollback', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getClassMetadata', array('className' => $className), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'createQuery', array('dql' => $dql), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'createNamedQuery', array('name' => $name), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'createQueryBuilder', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'flush', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'clear', array('entityName' => $entityName), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->clear($entityName);
    }

    public function close()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'close', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->close();
    }

    public function persist($entity)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'persist', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'remove', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'refresh', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'detach', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'merge', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'contains', array('entity' => $entity), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getEventManager', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getConfiguration', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'isOpen', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getUnitOfWork', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getProxyFactory', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'initializeObject', array('obj' => $obj), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'getFilters', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'isFiltersStateClean', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'hasFilters', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return $this->valueHolder5435b->hasFilters();
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

        $instance->initializer0e0c9 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5435b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5435b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5435b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, '__get', ['name' => $name], $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        if (isset(self::$publicProperties37f65[$name])) {
            return $this->valueHolder5435b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5435b;

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

        $targetObject = $this->valueHolder5435b;
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
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5435b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5435b;
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
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, '__isset', array('name' => $name), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5435b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5435b;
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
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, '__unset', array('name' => $name), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5435b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5435b;
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
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, '__clone', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        $this->valueHolder5435b = clone $this->valueHolder5435b;
    }

    public function __sleep()
    {
        $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, '__sleep', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;

        return array('valueHolder5435b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0e0c9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0e0c9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0e0c9 && ($this->initializer0e0c9->__invoke($valueHolder5435b, $this, 'initializeProxy', array(), $this->initializer0e0c9) || 1) && $this->valueHolder5435b = $valueHolder5435b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5435b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5435b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
