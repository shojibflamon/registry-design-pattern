<?php

use Shojibflamon\RegistryDesignPattern\System\config;
use Shojibflamon\RegistryDesignPattern\System\Registry;

include_once 'start.php';

$registry = new Registry();
//$registry->set('name','shojib');
//print $registry->get('name');

$config = new Config();
//$config->set('username','secret');
//$config->set('password','secret');

$config->load('default');
$registry->set('config',$config);

print_r($registry->get('config')->get('site_url'));
