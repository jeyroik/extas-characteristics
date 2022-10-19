<?php
namespace jeyroik\interfaces;

use extas\interfaces\IHasValue;

interface IHaveValueIncrement extends IHasValue
{
    public function incValue(int $inc): int;
    public function decValue(int $dec): int;
}
