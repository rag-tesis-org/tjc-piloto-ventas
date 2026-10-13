<?php
declare(strict_types=1); namespace App\Services;
use App\Domain\Customer; use App\Domain\Order; use App\Domain\Promotion;
final class DiscountPolicy { public function discountFor(Customer $customer, ?Promotion $promotion): float { $premiumPercentage = $customer->isPremium() ? 15.0 : 0.0; $promotionPercentage = $promotion?->isActive() ? $promotion->percentage() : 0.0; return max($premiumPercentage, $promotionPercentage); } public function percentageFor(Order $order): float { return $this->discountFor($order->customer, $order->promotion); } }
