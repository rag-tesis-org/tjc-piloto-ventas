<?php
declare(strict_types=1); namespace Tests\Unit\Services; use App\Services\TaxPolicy; use PHPUnit\Framework\TestCase;
final class TaxPolicyTest extends TestCase { public function test_tax_is_eighteen_percent(): void { self::assertSame(18.0,(new TaxPolicy())->calculate(100.0)); } }
