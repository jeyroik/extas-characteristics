<?php
namespace jeyroik\components;

use extas\components\THasValue;
use jeyroik\interfaces\stages\IStageAfterInc;
use jeyroik\interfaces\stages\IStageBeforeDec;
use jeyroik\interfaces\stages\IStageBeforeInc;

trait THasValueIncrement
{
    use THasValue;

    public function incValue(int $inc): int
    {
        foreach ($this->getPluginsByStage(IStageBeforeInc::NAME) as $plugin) {
            $plugin($this, $inc);
        }

        $this->setValue($this->getValue() + $inc);

        foreach ($this->getPluginsByStage(IStageAfterInc::NAME) as $plugin) {
            $plugin($this, $inc);
        }

        return $this->getValue();
    }

    public function decValue(int $dec): int
    {
        foreach ($this->getPluginsByStage(IStageBeforeDec::NAME) as $plugin) {
            $plugin($this, $dec);
        }

        $this->setValue($this->getValue() - $dec);

        foreach ($this->getPluginsByStage(IStageAfterInc::NAME) as $plugin) {
            $plugin($this, $dec);
        }

        return $this->getValue();
    }
}
