<?php

namespace BorisNedovis\PropertyContainer;

use BorisNedovis\PropertyContainer\src\PropertyContainerInterface;
/**
 * Class PropertyContainerService
 *
 * @package  App\Services\PropertyContainerService
 */
class PropertyContainer implements PropertyContainerInterface
{

    /**
     * $var array
     */
    private $propertyContainer = [];

    /**
     * @inheritdoc
     */
    function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @inheritdoc
     */
    function deleteProperty($propertyName)
    {
      unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @inheritdoc
     */
    function getProperty($propertyName)
    {
     return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @inheritdoc
     */
    function setProperty($propertyName, $value)
    {
        if(!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property $propertyName not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @inheritdoc
     */
    function getAll()
    {
        return $this->propertyContainer;
    }
}