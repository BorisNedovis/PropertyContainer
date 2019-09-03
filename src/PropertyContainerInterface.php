<?php

namespace BorisNedovis\PropertyContainer\src;


/**
 * Interface PropertyContainerInterface
 */
interface PropertyContainerInterface
{
    /**
     * @param $propertyName string/integer
     * @param $value string/integer
     * @return mixed
     */
    function addProperty($propertyName, $value);

    /**
     * @param $propertyName string/integer
     * @return mixed
     */
    function deleteProperty($propertyName);

    /**
     * @param $propertyName string/integer
     * @return mixed
     */
    function getProperty($propertyName);

    /**
     * @param $propertyName string/integer
     * @param $value string/integer
     * @return mixed
     */
    function setProperty($propertyName, $value);
}