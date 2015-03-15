<?php
use Affinity4API\PSR4Autoloader as Autoloader; 

$loader = new Autoloader;

// register the autoloader
$loader->register();

// register the base directories for the namespace prefix
$loader->addNamespace('Affinity4API\\Classes', getBasePath() . '/classes' );
$loader->addNamespace('Affinity4API\\Action', getBasePath() . '/libs/Action' );
