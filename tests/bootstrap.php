<?php

error_reporting(E_ALL | E_STRICT);
$loader = require_once __DIR__ . '/../vendor/autoload.php';
$loader->add('Capsule\\', __DIR__);


/*
if (file_exists($file = __DIR__.'/../../../../autoload.php')) {
    include_once $file;
}
*/