<?php
namespace jeyroik\components\characteristics;

use extas\components\Item;
use extas\components\samples\THasSample;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use extas\interfaces\characteristics\ICharacteristicSample;
use extas\interfaces\samples\ISample;
use jeyroik\components\THasValueIncrement;
use jeyroik\interfaces\characteristics\ICharacteristic;

class Characteristic extends Item implements ICharacteristic
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasValueIncrement;
    use THasSample;

    public function buildFromSample(ISample $sample, string $name = '@sample(uuid6)')
    {
        /**
         * @var ICharacteristicSample $sample
         */
        parent::buildFromSample($sample, $name);

        $this->setValue($sample->getDefaultValue());

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
