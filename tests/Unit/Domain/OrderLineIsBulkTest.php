<?php

declare(strict_types=1);

namespace Tests\Unit\Domain;

use App\Domain\OrderLine;
use PHPUnit\Framework\TestCase;

final class OrderLineIsBulkTest extends TestCase
{
    public function test_quantity_below_ten_is_not_bulk(): void
    {
        self::assertFalse((new OrderLine(9, 15.0))->isBulk());
    }

    public function test_quantity_of_ten_is_bulk(): void
    {
        self::assertTrue((new OrderLine(10, 15.0))->isBulk());
    }

    public function test_quantity_above_ten_is_bulk(): void
    {
        self::assertTrue((new OrderLine(25, 15.0))->isBulk());
    }
}
