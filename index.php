<?php

require_once 'vendor/autoload.php';
require_once 'src/Documents/Contact.php';

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

use Documents\Contact;

AnnotationDriver::registerAnnotationClasses();

$config = new Configuration();
$config->setProxyDir('Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir('Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setMetadataDriverImpl(AnnotationDriver::create('src/Documents'));

$config->setDefaultDB('users');

$dm = DocumentManager::create(new Connection(), $config);

#$contact = $dm->getRepository(Contact::class)->findOneBy(array());
