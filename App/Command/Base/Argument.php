<?php
/**
 * Created by PhpStorm.
 * User: dev-lusaja
 * Date: 18/01/18
 * Time: 04:17 PM
 */

namespace Command\Base;


class Argument
{
    /**
     * @var string
     */
    public $name = '';

    /**
     * @var string
     */
    public $prefix = '';

    /**
     * @var string
     */
    public $longPrefix = '';

    /**
     * @var string
     */
    public $description = '';

    /**
     * @var string
     */
    public $defaultValue = '';

    /**
     * @var bool
     */
    public $required = false;

    /**
     * @var bool
     */
    public $noValue = true;

    /**
     * @var string, int, float or bool
     */
    public $castTo = 'string';

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    /**
     * @param $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @param $longPrefix
     * @return $this
     */
    public function setLongPrefix($longPrefix)
    {
        $this->longPrefix = $longPrefix;
        return $this;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param $defaultValue
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * @param $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @param $noValue
     * @return $this
     */
    public function setNoValue($noValue)
    {
        $this->noValue = $noValue;
        return $this;
    }

    /**
     * @param $castTo
     * @return $this
     */
    public function setCastTo($castTo)
    {
        $this->castTo = $castTo;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $args = get_object_vars($this);
        unset($args['name']);
        return [$this->name => $args];

    }
}