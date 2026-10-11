<?php
declare(strict_types=1); namespace App\Services;
final class TaxPolicy { public function calculate(float $amount): float { return round($amount * 0.18, 2); } }
