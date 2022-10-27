<?php
namespace jeyroik\interfaces\characteristics;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\samples\IHasSample;
use jeyroik\interfaces\IHaveValueIncrement;

interface ICharacteristic extends IItem, IHasId, IHasDescription, IHasName, IHaveValueIncrement, IHasSample
{
    public const SUBJECT = 'extas.characteristic';
}
