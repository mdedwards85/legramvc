<?php



// get registry

$registry = $application->getRegistry();



// set application settings

$registry->setKey("application-name", "legraMVC");

$registry->setKey("application-version", "v0.4.0");



// set router settings

$registry->setKey("router-default-controller", "default");

$registry->setKey("router-default-action", "index");


