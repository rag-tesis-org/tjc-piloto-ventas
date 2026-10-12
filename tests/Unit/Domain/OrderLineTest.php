<?php
declare(strict_types=1); namespace Tests\Unit\Domain; use App\Domain\OrderLine; use PHPUnit\Framework\TestCase;
final class OrderLineTest extends TestCase {
    public function test_line_total_multiplies_quantity_by_unit_price(): void { self::assertSame(45.0,(new OrderLine(3,15.0))->total()); }
    public function test_zero_quantity_line_totals_zero(): void { self::assertSame(0.0,(new OrderLine(0,15.0))->total()); }
    public function test_negative_quantity_is_rejected(): void { $this->expectException(\InvalidArgumentException::class); new OrderLine(-1,15.0); }
    public function test_negative_unit_price_is_rejected(): void { $this->expectException(\InvalidArgumentException::class); new OrderLine(2,-0.01); }
}
