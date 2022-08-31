<?php

namespace DigitalIncentives\Incenti;

class Product extends AbstractEntity
{
    protected int $id;
    protected string $name;
    protected float $minFaceValue;
    protected float $maxFaceValue;
    protected int $count;
    protected array $price;
    protected string $modifiedDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

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
     * @return float
     */
    public function getMinFaceValue(): float
    {
        return $this->minFaceValue;
    }

    /**
     * @param float $minFaceValue
     */
    public function setMinFaceValue(float $minFaceValue): void
    {
        $this->minFaceValue = $minFaceValue;
    }

    /**
     * @return float
     */
    public function getMaxFaceValue(): float
    {
        return $this->maxFaceValue;
    }

    /**
     * @param float $maxFaceValue
     */
    public function setMaxFaceValue(float $maxFaceValue): void
    {
        $this->maxFaceValue = $maxFaceValue;
    }

    public function isFixedValue(): bool
    {
        return $this->minFaceValue === $this->maxFaceValue;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function isInventoried()
    {
        return isset($this->count);
    }

    /**
     * @return array
     */
    public function getPrice(): array
    {
        return $this->price;
    }

    /**
     * @param array $price
     */
    public function setPrice(array $price): void
    {
        $this->price = $price;
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
}
