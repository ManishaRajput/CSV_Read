<?php


// application.php

require_once( __DIR__.'/../vendor/autoload.php');

use Symfony\Component\Console\Application as App;
use Migration\HelloWorld as Hello;
$application = new App();

// ... register commands
$application->add(new Hello());

$application->run();

?>
