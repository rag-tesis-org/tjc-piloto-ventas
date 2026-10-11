<?php
declare(strict_types=1); namespace App\Services;
use App\Domain\Order;
final readonly class OrderPricingService { public function __construct(private DiscountPolicy $discounts, private DiscountCalculator $calculator, private TaxPolicy $taxes) {} public function calculateTotal(Order $order): float { $subtotal = $order->subtotal(); $discounted = $this->calculator->applyPercentage($subtotal, $this->discounts->percentageFor($order)); return round($discounted + $this->taxes->calculate($discounted), 2); } }
