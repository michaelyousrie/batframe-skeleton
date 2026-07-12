<?php

declare(strict_types=1);

// Front controller. Point your web server's document root at this folder.
require dirname(__DIR__) . '/vendor/autoload.php';

(new App\App())->run();
