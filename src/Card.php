<?php

namespace DigitalIncentives\Incenti;

class Card extends AbstractEntity
{
    protected int $id;
    protected string $serialNumber;
    protected string $cardCode;
    protected string $pin;
    protected string $expirationDate;
    protected string $status;

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
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     */
    public function setSerialNumber(string $serialNumber): void
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return string
     */
    public function getCardCode(): string
    {
        return $this->cardCode;
    }

    /**
     * @param string $cardCode
     */
    public function setCardCode(string $cardCode): void
    {
        $this->cardCode = $cardCode;
    }

    /**
     * @return string
     */
    public function getPin(): string
    {
        return $this->pin;
    }

    /**
     * @param string $pin
     */
    public function setPin(string $pin): void
    {
        $this->pin = $pin;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     */
    public function setExpirationDate(string $expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}