# SDD — Ventas y descuentos

## Propósito y stack
Piloto PHP 8.3 con Laravel 12, Composer 2 y PHPUnit 11.5. Las entidades viven en `app/Domain` y las políticas/coordinadores en `app/Services`; los tests se separan en `tests/Unit` y `tests/Feature`.

## Decisiones y casos
El subtotal pertenece al pedido, los descuentos se calculan como porcentaje y el impuesto se aplica mediante una política separada. `SAL-1` es Local (`DiscountCalculator::applyPercentage()`), `SAL-2` es Functional (`DiscountPolicy::discountFor()`; evidencia externa `ORACLE-SAL-2`) y `SAL-3` es Structural (`OrderPricingService::calculateTotal()`).

Los casos son parches independientes sobre un baseline común. Los tests preexistentes son parciales y no cubren targets experimentales. Fuera de alcance: frontend, red, CORS, Redis, colas y bases de datos externas.
