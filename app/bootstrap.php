<?php declare(strict_types = 1);

use Contributte\Bootstrap\ExtraConfigurator;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new ExtraConfigurator();

$configurator->setDebugMode(true);
$configurator->enableDebugger(__DIR__ . '/../var/log');
$configurator->setTempDirectory(__DIR__ . '/../var/tmp');

$configurator->addConfig(__DIR__ . '/../config/config.neon');
$configurator->addConfig(__DIR__ . '/../config/local.neon');

return $configurator->createContainer();
