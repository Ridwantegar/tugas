<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder802ec = null;
    private $initializercb4c7 = null;
    private static $publicProperties564e7 = [
        
    ];
    public function getConnection()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getConnection', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getMetadataFactory', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getExpressionBuilder', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'beginTransaction', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getCache', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getCache();
    }
    public function transactional($func)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'transactional', array('func' => $func), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'wrapInTransaction', array('func' => $func), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'commit', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->commit();
    }
    public function rollback()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'rollback', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getClassMetadata', array('className' => $className), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'createQuery', array('dql' => $dql), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'createNamedQuery', array('name' => $name), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'createQueryBuilder', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'flush', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'clear', array('entityName' => $entityName), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->clear($entityName);
    }
    public function close()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'close', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->close();
    }
    public function persist($entity)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'persist', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'remove', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'refresh', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'detach', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'merge', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getRepository', array('entityName' => $entityName), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'contains', array('entity' => $entity), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getEventManager', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getConfiguration', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'isOpen', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getUnitOfWork', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getProxyFactory', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'initializeObject', array('obj' => $obj), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'getFilters', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'isFiltersStateClean', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'hasFilters', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return $this->valueHolder802ec->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercb4c7 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder802ec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder802ec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder802ec->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, '__get', ['name' => $name], $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        if (isset(self::$publicProperties564e7[$name])) {
            return $this->valueHolder802ec->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder802ec;
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
        $targetObject = $this->valueHolder802ec;
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
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder802ec;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder802ec;
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
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, '__isset', array('name' => $name), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder802ec;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder802ec;
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
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, '__unset', array('name' => $name), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder802ec;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder802ec;
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
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, '__clone', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        $this->valueHolder802ec = clone $this->valueHolder802ec;
    }
    public function __sleep()
    {
        $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, '__sleep', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
        return array('valueHolder802ec');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercb4c7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercb4c7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercb4c7 && ($this->initializercb4c7->__invoke($valueHolder802ec, $this, 'initializeProxy', array(), $this->initializercb4c7) || 1) && $this->valueHolder802ec = $valueHolder802ec;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder802ec;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder802ec;
    }
}
