<?php
namespace extas\interfaces\characteristics;

use extas\interfaces\IHasType;
use extas\interfaces\samples\ISample;

interface ICharacteristicSample extends ISample
{
    public const SUBJECT = 'extas.characteristic.sample';

    public const FIELD__DEFAULT_VALUE = 'value_default';

    public function getDefaultValue(): int;
    public function setDefaultValue(int $value): ICharacteristicSample;
}
