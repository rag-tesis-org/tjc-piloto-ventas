<?php
declare(strict_types=1); namespace App\Services;
final class DiscountCalculator { public function applyPercentage(float $amount, float $percentage): float { $keptFraction = 1 - $percentage / 100; return round($amount * $keptFraction, 2); } }
