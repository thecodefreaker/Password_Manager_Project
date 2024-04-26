<?php

namespace ContainerL88BMLR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder14dc9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e83c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties605e2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getConnection', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getMetadataFactory', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getExpressionBuilder', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'beginTransaction', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getCache', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'transactional', array('func' => $func), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'commit', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->commit();
    }

    public function rollback()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'rollback', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getClassMetadata', array('className' => $className), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'createQuery', array('dql' => $dql), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'createNamedQuery', array('name' => $name), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'createQueryBuilder', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'flush', array('entity' => $entity), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'clear', array('entityName' => $entityName), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->clear($entityName);
    }

    public function close()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'close', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->close();
    }

    public function persist($entity)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'persist', array('entity' => $entity), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'remove', array('entity' => $entity), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'detach', array('entity' => $entity), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'merge', array('entity' => $entity), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'contains', array('entity' => $entity), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getEventManager', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getConfiguration', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'isOpen', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getUnitOfWork', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getProxyFactory', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'initializeObject', array('obj' => $obj), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'getFilters', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'isFiltersStateClean', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'hasFilters', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return $this->valueHolder14dc9->hasFilters();
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

        $instance->initializer7e83c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder14dc9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder14dc9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder14dc9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, '__get', ['name' => $name], $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        if (isset(self::$publicProperties605e2[$name])) {
            return $this->valueHolder14dc9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14dc9;

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

        $targetObject = $this->valueHolder14dc9;
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
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14dc9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder14dc9;
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
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, '__isset', array('name' => $name), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14dc9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder14dc9;
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
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, '__unset', array('name' => $name), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14dc9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder14dc9;
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
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, '__clone', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        $this->valueHolder14dc9 = clone $this->valueHolder14dc9;
    }

    public function __sleep()
    {
        $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, '__sleep', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;

        return array('valueHolder14dc9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer7e83c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7e83c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e83c && ($this->initializer7e83c->__invoke($valueHolder14dc9, $this, 'initializeProxy', array(), $this->initializer7e83c) || 1) && $this->valueHolder14dc9 = $valueHolder14dc9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder14dc9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder14dc9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
