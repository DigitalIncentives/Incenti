<?php

namespace DigitalIncentives\Incenti;

class Item extends AbstractEntity
{
    protected string $brandCode;
    protected int $productId;
    protected float $productFaceValue;
    protected int $quantity;
    protected string $pictureUrl;
    protected string $countryCode;
    protected string $currencyCode;
    protected array $cards;

    /**
     * @return string
     */
    public function getBrandCode(): string
    {
        return $this->brandCode;
    }

    /**
     * @param string $brandCode
     */
    public function setBrandCode(string $brandCode): void
    {
        $this->brandCode = $brandCode;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return float
     */
    public function getProductFaceValue(): float
    {
        return $this->productFaceValue;
    }

    /**
     * @param float $productFaceValue
     */
    public function setProductFaceValue(float $productFaceValue): void
    {
        $this->productFaceValue = $productFaceValue;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getPictureUrl(): string
    {
        return $this->pictureUrl;
    }

    /**
     * @param string $pictureUrl
     */
    public function setPictureUrl(string $pictureUrl): void
    {
        $this->pictureUrl = $pictureUrl;
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
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * @param array $cards
     */
    public function setCards(array $cards): void
    {
        $this->cards = array_map(function ($value) {
            return new Card($value);
        }, $cards);
    }
}
