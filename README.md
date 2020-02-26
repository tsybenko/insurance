# Insurance

## Usage example

```php
<?php

require_once __DIR__ . '/bootstrap.php';

use Insurance\Calculator;
use Insurance\Strategies\BaseStrategy;
use Insurance\Discount;
use Insurance\Product;

$promocode = '';
$product = new Product();
$discount = Discount::getByPromo($promocode);

$calc = new Calculator(
    new BaseStrategy($product, $discount)
);

$calcResult = $calc->calculate();

echo $calcResult->getBase();
echo $calcResult->getDiscounted();
```