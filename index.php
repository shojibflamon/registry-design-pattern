<?php

use Shojibflamon\RegistryDesignPattern\System\Registry;

include_once 'start.php';

$registry = new Registry();

$registry->set('name','shojib');

print $registry->get('name');
