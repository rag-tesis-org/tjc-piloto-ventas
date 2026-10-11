<?php
declare(strict_types=1); namespace Tests\Unit\Domain; use App\Domain\OrderLine; use PHPUnit\Framework\TestCase;
final class OrderLineTest extends TestCase { public function test_line_total_multiplies_quantity_by_unit_price(): void { self::assertSame(45.0,(new OrderLine(3,15.0))->total()); } }
