<?php

$define_src = __DIR__ . '/defines.php';

if (file_exists(__DIR__ . '/defines_dev.php')) {
    $define_src =  __DIR__ . '/defines_dev.php';
}

require_once $define_src;

require_once dirname(__DIR__) . '/vendor/autoload.php';

require_once __DIR__ . '/events.php';