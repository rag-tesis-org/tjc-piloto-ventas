<?php
declare(strict_types=1); namespace App\Domain;
final readonly class Order { /** @param list<OrderLine> $lines */ public function __construct(public Customer $customer, public ?Promotion $promotion, private array $lines) {} public function subtotal(): float { return round(array_sum(array_map(static fn (OrderLine $line): float => $line->total(), $this->lines)), 2); } }
