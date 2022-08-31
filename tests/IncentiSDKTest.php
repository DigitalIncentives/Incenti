<?php

namespace DigitalIncentives\Incenti;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class IncentiSDKTest extends TestCase
{
    public function testCatalogReturnsBrands()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/catalog.json')),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new HttpClient(['handler' => $handlerStack]);

        $incenti = new IncentiSDK('url', 'user', 'pass');
        $incenti->setHttpClient($httpClient);

        $brands = $incenti->getCatalog();
        foreach ($brands as $brand) {
            self:
            self::assertInstanceOf(Brand::class, $brand);
        }
    }

    public function testGetExchangeRatesReturnsExchangeRates()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/exchange_rates.json')),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new HttpClient(['handler' => $handlerStack]);

        $incenti = new IncentiSDK('url', 'user', 'pass');
        $incenti->setHttpClient($httpClient);

        $exchangeRates = $incenti->getExchangeRates();
        self::assertInstanceOf(ExchangeRates::class, $exchangeRates);
    }

    public function testGetAccountsReturnsArrayOfAccounts()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/accounts.json')),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new HttpClient(['handler' => $handlerStack]);

        $incenti = new IncentiSDK('url', 'user', 'pass');
        $incenti->setHttpClient($httpClient);

        $accounts = $incenti->getAccounts();

        foreach ($accounts as $account) {
            self::assertInstanceOf(Account::class, $account);
        }
    }
}
