<?php
declare(strict_types=1); namespace App\Domain;
final readonly class Customer { public function __construct(public string $id, private bool $premium) {} public function isPremium(): bool { return $this->premium; } }
