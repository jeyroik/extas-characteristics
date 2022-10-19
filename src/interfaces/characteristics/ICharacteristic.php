<?php
namespace jeyroik\interfaces\characteristics;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IHasValue;
use extas\interfaces\IItem;
use jeyroik\interfaces\IHaveValueIncrement;

interface ICharacteristic extends IItem, IHasId, IHasDescription, IHasName, IHaveValueIncrement
{
    public const SUBJECT = 'extas.characteristic';
}
