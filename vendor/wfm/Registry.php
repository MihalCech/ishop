<?php

namespace wfm;

class Registry
{
    use TSingleton;

    protected static $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (!empty(self::$properties[$name])){
            return self::$properties[$name];
        }
    }

    public function getProperties()
    {
        return self::$properties;
    }
}