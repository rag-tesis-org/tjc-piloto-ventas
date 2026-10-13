<?php
declare(strict_types=1); namespace App\Domain;
final class Voucher { public function __construct(public float $balance) {} public function redeem(float $amount): float { if ($amount > $this->balance) { throw new \InvalidArgumentException('saldo insuficiente'); } return $this->balance - $amount; } }
