# SDD — Ventas y descuentos

## Propósito
Modelar el cálculo de precios de pedidos, descuentos de clientes y el impuesto aplicable.

## Stack
PHP 8.3, Laravel 12, Composer 2 y PHPUnit 11.5.

## Estructura
Las entidades están en `app/Domain`; las políticas y servicios de cálculo, en `app/Services`. Las pruebas Unit y Feature viven bajo `tests`.

Las reglas operativas se definen en el modelo de dominio y sus servicios asociados.

## Decisiones de diseño
El pedido calcula su subtotal a partir de sus líneas. Las políticas de descuento e impuesto se mantienen separadas del coordinador de precios.

## Ejecución
Ejecutar `composer install` y después `php vendor/bin/phpunit` o `php artisan test`.

## Fuera de alcance
Interfaz web, servicios remotos, colas, Redis y bases de datos externas.
