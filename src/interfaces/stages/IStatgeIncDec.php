<?php
namespace jeyroik\interfaces\stages;

use jeyroik\interfaces\characteristics\ICharacteristic;

interface IStageIncDec
{
    public function __invoke(ICharacteristic $char, int &$delta): void;
}
