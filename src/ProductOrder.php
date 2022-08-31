<?php

namespace DigitalIncentives\Incenti;

use JsonSerializable;

class ProductOrder implements JsonSerializable
{
    public function __construct(private int $productId, private int $quantity, private int $value)
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'ProductId' => $this->productId,
            'Quantity' => $this->quantity,
            'Value' => $this->value
        ];
    }
}
