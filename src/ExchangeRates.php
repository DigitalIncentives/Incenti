<?php

namespace DigitalIncentives\Incenti;

use Exception;

class ExchangeRates extends AbstractEntity
{
    protected string $baseCurrencyCode;
    /**
     * @var Rate[]
     */
    protected array $rates;

    /**
     * @return string
     */
    public function getBaseCurrencyCode(): string
    {
        return $this->baseCurrencyCode;
    }

    /**
     * @param string $baseCurrencyCode
     */
    public function setBaseCurrencyCode(string $baseCurrencyCode): void
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
    }

    /**
     * @return Rate[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }

    /**
     * @param array $rates
     */
    public function setRates(array $rates): void
    {
        $this->rates = array_map(function ($value) {
            return new Rate($value);
        }, $rates);
    }

    public function hasExchangeRate(string $currency)
    {
        foreach ($this->rates as $rate) {
            if ($rate->getCurrencyCode() === $currency) {
                return true;
            }
        }

        return false;
    }

    /**
     * Exchange value from default currency into provided currency.
     *
     * @param string $currency
     * @param float $value
     * @return float
     * @throws Exception
     */
    public function exchangeToCurrency(string $currency, float $value): float
    {
        foreach ($this->rates as $rate) {
            if ($rate->getCurrencyCode() === $currency) {
                return $value * $rate->getValue();
            }
        }

        throw new Exception('Currency Code ' . $currency . ' not found.');
    }

    /**
     * Exchange value into default currency from provided currency.
     *
     * @param string $currency
     * @param float $value
     * @return float
     * @throws Exception
     */
    public function exchangeFromCurrency(string $currency, float $value): float
    {
        foreach ($this->rates as $rate) {
            if ($rate->getCurrencyCode() === $currency) {
                return $value / $rate->getValue();
            }
        }

        throw new Exception('Currency Code ' . $currency . ' not found.');
    }
}
