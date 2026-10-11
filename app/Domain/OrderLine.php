<?php
declare(strict_types=1); namespace App\Domain;
final readonly class OrderLine { public function __construct(public int $quantity, public float $unitPrice) {} public function total(): float { return round($this->quantity * $this->unitPrice, 2); } }
