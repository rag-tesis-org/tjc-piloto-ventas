<?php
declare(strict_types=1);

namespace App\Domain;

final readonly class OrderLine
{
    public function __construct(public int $quantity, public float $unitPrice)
    {
        if ($quantity <= 0) {
            throw new \InvalidArgumentException('Order line quantity must be positive.');
        }
    }

    public function total(): float
    {
        $lineTotal = $this->quantity * $this->unitPrice;

        return round($lineTotal, 2);
    }
}
