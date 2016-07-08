<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 08/07/2016
 * Time: 15:13
 */
class InversionOfControl
{
    private $setters = Array();
    private $instances = Array();

    public function setSetter($name, $function)
    {
        $this->setters[$name] = $function;

    }

    public function setSetters($setters)
    {
        foreach ($setters as $key => $value)
            $this->setters[$key] = $value;
    }

    public function getInstance($name)
    {
        if (!isset($this->setters[$name])) {
            return NULL;
        }

        if (!isset($this->instances[$name])) {
            $this->instances[$name] = $this->setters[$name]($this);
        }

        return $this->instances[$name];

    }

}



