<?php
declare(strict_types=1); namespace App\Domain;
final readonly class OrderLine { public function __construct(public int $quantity, public float $unitPrice) { if ($quantity < 0 || $unitPrice < 0.0) { throw new \InvalidArgumentException('Quantity and unit price must be non-negative.'); } } public function total(): float { return round($this->quantity * $this->unitPrice, 2); } public function isEmpty(): bool { return $this->quantity === 0; } public function withQuantity(int $quantity): self { return new self($quantity, $this->unitPrice); } }
