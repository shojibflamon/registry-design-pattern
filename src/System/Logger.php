<?php

namespace Shojibflamon\RegistryDesignPattern\System;

class Logger
{
    private $handle;
    private $logDirectory;

    public function __construct($filename)
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->logDirectory = __DIR__ . '/logs/';
        $this->handle = fopen($this->logDirectory . $filename, 'a');
    }

    public function write($message) {
        fwrite($this->handle, date('Y-m-d H:i:s') . ' - ' . print_r($message, true) . PHP_EOL);
    }

    public function __destruct() {
        fclose($this->handle);
    }
}