<?php

namespace ContainerOhXnBO3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderab450 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer335cc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8aa38 = [
        
    ];

    public function getConnection()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getConnection', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getMetadataFactory', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getExpressionBuilder', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'beginTransaction', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getCache', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getCache();
    }

    public function transactional($func)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'transactional', array('func' => $func), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'wrapInTransaction', array('func' => $func), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'commit', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->commit();
    }

    public function rollback()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'rollback', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getClassMetadata', array('className' => $className), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'createQuery', array('dql' => $dql), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'createNamedQuery', array('name' => $name), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'createQueryBuilder', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'flush', array('entity' => $entity), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'clear', array('entityName' => $entityName), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->clear($entityName);
    }

    public function close()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'close', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->close();
    }

    public function persist($entity)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'persist', array('entity' => $entity), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'remove', array('entity' => $entity), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'detach', array('entity' => $entity), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'merge', array('entity' => $entity), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getRepository', array('entityName' => $entityName), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'contains', array('entity' => $entity), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getEventManager', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getConfiguration', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'isOpen', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getUnitOfWork', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getProxyFactory', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'initializeObject', array('obj' => $obj), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'getFilters', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'isFiltersStateClean', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'hasFilters', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return $this->valueHolderab450->hasFilters();
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

        $instance->initializer335cc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderab450) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderab450 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderab450->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, '__get', ['name' => $name], $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        if (isset(self::$publicProperties8aa38[$name])) {
            return $this->valueHolderab450->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab450;

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

        $targetObject = $this->valueHolderab450;
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
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab450;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderab450;
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
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, '__isset', array('name' => $name), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab450;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderab450;
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
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, '__unset', array('name' => $name), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab450;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderab450;
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
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, '__clone', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        $this->valueHolderab450 = clone $this->valueHolderab450;
    }

    public function __sleep()
    {
        $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, '__sleep', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;

        return array('valueHolderab450');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer335cc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer335cc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer335cc && ($this->initializer335cc->__invoke($valueHolderab450, $this, 'initializeProxy', array(), $this->initializer335cc) || 1) && $this->valueHolderab450 = $valueHolderab450;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderab450;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderab450;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
