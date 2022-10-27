# extas-characteristics
Extas characteristics package

Характеристика - целое число, обозначающее значение того или иного свойства.

# usage

```php
use extas\components\characteristics\CharacteristicSample as S

$sample = new S([
    S::FIELD__NAME => 'test',
    S::FIELD__DESCRIPTION => 'Some test char',
    S::FIELD__TITLE => 'Char#1',
    S::FIELD__DEFAULT_VALUE => 1
]);

$char = new Characteristic();
$char->buildFromSample($sample);

echo $char->getValue(); // 1
echo $char->incValue(3)->getValue(); // 4
echo $char->decValue(3)->getValue(); // 1
```