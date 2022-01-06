<?php

namespace Shojibflamon\RegistryDesignPattern\System;

final class Registry
{
    private $data = [];

    public function get($key)
    {
        return $this->data[$key] ?? NULL;
    }

    public function set($key,$value)
    {
        $this->data[$key] = $value;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }
}