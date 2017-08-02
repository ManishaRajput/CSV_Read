<?php


// application.php

require __DIR__.'/vendor/autoload.php';
require 'HelloWorld.php';
use Symfony\Component\Console\Application as App;
use AppBundle\Command\HelloWorld as Hello;
$application = new App();

// ... register commands
$application->add(new Hello());

$application->run();

?>
