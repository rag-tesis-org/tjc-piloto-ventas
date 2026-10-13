<?php
declare(strict_types=1); namespace Tests\Unit\Domain; use App\Domain\OrderLine; use PHPUnit\Framework\TestCase;
final class OrderLineIsSingleTest extends TestCase {
    public function test_one_unit_is_single(): void { self::assertTrue((new OrderLine(1,10.0))->isSingle()); }
    public function test_two_units_is_not_single(): void { self::assertFalse((new OrderLine(2,10.0))->isSingle()); }
}
