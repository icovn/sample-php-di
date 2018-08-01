<?php

$container = require __DIR__ . '/../app/bootstrap.php';

$userManager = $container->get('\icovn\UserManager');
$userManager->register('quanghuy.ico@gmail.com');