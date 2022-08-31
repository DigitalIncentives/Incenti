<?php

use DigitalIncentives\Incenti\IncentiSDK;
use DigitalIncentives\Incenti\CreateOrder;
use DigitalIncentives\Incenti\ProductOrder;

require __DIR__ . '/../vendor/autoload.php';

$incenti = new IncentiSDK(
    'https://api.example.com',
    'CLIENT_ID',
    'CLIENT_SECRET'
);

// As of writing this, the Request ID must be a proper UUID.
$requestId = '97018cf7-98f5-40fc-a142-731d43a72e29';

$product = new ProductOrder(65889, 1, 15);
$order = new CreateOrder($requestId, 3185, [$product]);
$incenti->createOrder($order);