<?php
declare(strict_types=1); namespace Tests\Feature; use App\Domain\Customer; use App\Domain\Order; use App\Domain\OrderLine; use PHPUnit\Framework\TestCase;
final class PricingSmokeTest extends TestCase { public function test_order_exposes_a_subtotal(): void { $order=new Order(new Customer('c1',false),null,[new OrderLine(2,25.0)]); self::assertSame(50.0,$order->subtotal()); } }
