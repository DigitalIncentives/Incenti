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

// Generated in a previous create order request.
$requestId = '97018cf7-98f5-40fc-a142-731d43a72e29';

var_dump($incenti->getOrder($requestId));