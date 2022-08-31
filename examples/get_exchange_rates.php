<?php

require __DIR__ . '/../vendor/autoload.php';

$incenti = new \DigitalIncentives\Incenti\IncentiSDK(
    'https://api.example.com',
    'CLIENT_ID',
    'CLIENT_SECRET'
);

var_dump($incenti->getExchangeRates('USD', 'EUR' ));