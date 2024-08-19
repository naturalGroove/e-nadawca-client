<?php

namespace Abryb\ENadawca\Type\GetPlacowkaPocztowa;

/**
 * Class representing GetPlacowkaPocztowaAType
 */
class GetPlacowkaPocztowaAType
{
    /**
     * @var int[] $pni
     */
    private $pni = [
        
    ];

    /**
     * Adds as pni
     *
     * @return self
     * @param int $pni
     */
    public function addToPni($pni)
    {
        $this->pni[] = $pni;
        return $this;
    }

    /**
     * isset pni
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPni($index)
    {
        return isset($this->pni[$index]);
    }

    /**
     * unset pni
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPni($index)
    {
        unset($this->pni[$index]);
    }

    /**
     * Gets as pni
     *
     * @return int[]
     */
    public function getPni()
    {
        return $this->pni;
    }

    /**
     * Sets a new pni
     *
     * @param int[] $pni
     * @return self
     */
    public function setPni(array $pni)
    {
        $this->pni = $pni;
        return $this;
    }
}

