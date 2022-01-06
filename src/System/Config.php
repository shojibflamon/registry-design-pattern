<?php

namespace Shojibflamon\RegistryDesignPattern\System;

class Config
{
    private $data = [];

    public function get($key)
    {
        return $this->data[$key] ?? NULL;
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }

    public function load($fileName)
    {
        $file = __DIR__ . '/config/' . $fileName . '.php';

        if (!file_exists($file)){
            trigger_error('Error: Could not load config ' . $fileName . '!');
            exit();
        }

        require ($file);

        $this->data = array_merge($this->data,$_);
    }
}