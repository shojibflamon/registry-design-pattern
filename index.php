<?php

use Shojibflamon\RegistryDesignPattern\System\Config;
use Shojibflamon\RegistryDesignPattern\System\Logger;
use Shojibflamon\RegistryDesignPattern\System\Registry;

include_once 'start.php';

$registry = new Registry();

$config = new Config();
$config->load('default');
$registry->set('config',$config);

$logger = new Logger('log.log');
$registry->set('logger',$logger);

$configObj = $registry->get('config');
$dbAccess = $configObj->get('db_access');
$loggerObj = $registry->get('logger');
$loggerObj->write($dbAccess);