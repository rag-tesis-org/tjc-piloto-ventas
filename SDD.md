# SDD — Ventas y descuentos

## Propósito
Modelar el cálculo de precios de pedidos, descuentos de clientes y el impuesto aplicable.

## Stack
PHP 8.3, Laravel 12, Composer 2 y PHPUnit 11.5.

## Estructura
Las entidades están en `app/Domain`; las políticas y servicios de cálculo, en `app/Services`. Las pruebas Unit y Feature viven bajo `tests`.

## Reglas de negocio
Un cliente Premium recibe 15 % cuando no hay una promoción activa. Una promoción activa aporta su propio porcentaje; cuando coinciden, se utiliza el porcentaje mayor. Las líneas de pedido requieren una cantidad positiva. El impuesto se calcula sobre el importe ya descontado.

## Decisiones de diseño
El pedido calcula su subtotal a partir de sus líneas. Las políticas de descuento e impuesto se mantienen separadas del coordinador de precios.

## Ejecución
Ejecutar `composer install` y después `php vendor/bin/phpunit` o `php artisan test`.

## Fuera de alcance
Interfaz web, servicios remotos, colas, Redis y bases de datos externas.
