<?php

namespace DigitalIncentives\Incenti;

use JsonSerializable;

class CreateOrder implements JsonSerializable
{
    public function __construct(private string $requestId, private int $accountId, private array $products)
    {
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    public function jsonSerialize(): array
    {
        return [
            'RequestId' => $this->requestId,
            'AccountId' => $this->accountId,
            'Products' => $this->products
        ];
    }
}
