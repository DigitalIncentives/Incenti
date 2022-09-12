<?php


use DigitalIncentives\Incenti\ExchangeRates;
use PHPUnit\Framework\TestCase;

class ExchangeRatesTest extends TestCase
{

    public function testExchangeToCurrency()
    {
        $exchangeRates = new ExchangeRates(
            json_decode(file_get_contents(__DIR__ . '/fixtures/exchange_rates.json'), true)
        );

        $exchangedValue = $exchangeRates->exchangeToCurrency('EUR', 100.00);
        self::assertSame(100.15, $exchangedValue);
    }

    public function testExchangeFromCurrency()
    {
        $exchangeRates = new ExchangeRates(
            json_decode(file_get_contents(__DIR__ . '/fixtures/exchange_rates.json'), true)
        );

        $exchangedvalue = $exchangeRates->exchangeFromCurrency('EUR', 100.15);
        self::assertSame(100.00, $exchangedvalue);
    }

    public function testHasExchangeRate()
    {
        $exchangeRates = new ExchangeRates(
            json_decode(file_get_contents(__DIR__ . '/fixtures/exchange_rates.json'), true)
        );

        self::assertTrue($exchangeRates->hasExchangeRate('EUR'));
    }

    public function testDoesNotHaveExchangeRate()
    {
        $exchangeRates = new ExchangeRates(
            json_decode(file_get_contents(__DIR__ . '/fixtures/exchange_rates.json'), true)
        );

        self::assertFalse($exchangeRates->hasExchangeRate('FAKE'));
    }
}
