<?php

namespace DigitalIncentives\Incenti;

class ExchangeRates extends AbstractEntity
{
    protected string $baseCurrencyCode;
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
     * @return array
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
}
