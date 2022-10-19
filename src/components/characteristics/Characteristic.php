<?php
namespace jeyroik\components\characteristics;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use jeyroik\components\THasValueIncrement;
use jeyroik\interfaces\characteristics\ICharacteristic;

class Characteristic extends Item implements ICharacteristic
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasValueIncrement;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
