<?php
namespace extas\components\characteristics;

use extas\components\samples\Sample;
use extas\components\THasType;
use extas\interfaces\characteristics\ICharacteristicSample;

class CharacteristicSample extends Sample implements ICharacteristicSample
{
    public function getDefaultValue(): int
    {
        return $this->config[static::FIELD__DEFAULT_VALUE] ?? 0;
    }

    public function setDefaultValue(int $value): ICharacteristicSample
    {
        $this->config[static::FIELD__DEFAULT_VALUE] = $value;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return ICharacteristicSample::SUBJECT;
    }
}
