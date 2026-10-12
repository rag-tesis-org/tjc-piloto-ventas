<?php

declare(strict_types=1);

namespace Tests\Unit\Domain;

use App\Domain\OrderLine;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class OrderLineConstructorTest extends TestCase
{
    public function test_constructs_order_line_with_non_negative_values(): void
    {
        $orderLine = new OrderLine(3, 15.0);

        self::assertSame(3, $orderLine->quantity);
        self::assertSame(15.0, $orderLine->unitPrice);
    }

    public function test_allows_zero_quantity_and_unit_price(): void
    {
        $orderLine = new OrderLine(0, 0.0);

        self::assertSame(0, $orderLine->quantity);
        self::assertSame(0.0, $orderLine->unitPrice);
    }

    public function test_rejects_negative_quantity(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Quantity and unit price must be non-negative.');

        new OrderLine(-1, 15.0);
    }

    public function test_rejects_negative_unit_price(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Quantity and unit price must be non-negative.');

        new OrderLine(2, -0.01);
    }
}
