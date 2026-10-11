<?php
declare(strict_types=1); namespace App\Domain;
final readonly class Promotion { public function __construct(private float $percentage, private bool $active) {} public function isActive(): bool { return $this->active; } public function percentage(): float { return $this->percentage; } }
