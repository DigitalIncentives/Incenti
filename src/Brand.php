<?php

namespace DigitalIncentives\Incenti;

class Brand extends AbstractEntity
{
    protected string $name;
    protected string $countryCode;
    protected string $currencyCode;
    protected string $description;
    protected string $disclaimer;
    protected string $redemptionInstructions;
    protected string $terms;
    protected string $logoUrl;
    protected string $modifiedDate;
    protected array $products;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDisclaimer(): string
    {
        return $this->disclaimer;
    }

    /**
     * @param string $disclaimer
     */
    public function setDisclaimer(string $disclaimer): void
    {
        $this->disclaimer = $disclaimer;
    }

    /**
     * @return string
     */
    public function getRedemptionInstructions(): string
    {
        return $this->redemptionInstructions;
    }

    /**
     * @param string $redemptionInstructions
     */
    public function setRedemptionInstructions(string $redemptionInstructions): void
    {
        $this->redemptionInstructions = $redemptionInstructions;
    }

    /**
     * @return string
     */
    public function getTerms(): string
    {
        return $this->terms;
    }

    /**
     * @param string $terms
     */
    public function setTerms(string $terms): void
    {
        $this->terms = $terms;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     */
    public function setLogoUrl(string $logoUrl): void
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->modifiedDate;
    }

    /**
     * @param string $modifiedDate
     */
    public function setModifiedDate(string $modifiedDate): void
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     */
    public function setProducts(array $products): void
    {
        $this->products = array_map(function ($value) {
            return new Product($value);
        }, $products);
    }
}
